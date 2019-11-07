<?php

$debug = [];
$dump = [];

$repositoryLocation = __DIR__ . '/../../openmage-changelog/';

chdir($repositoryLocation);

$output = shell_exec('git log --format=%H----VALUEDELIMITER----%B----VALUEDELIMITER----%aN----VALUEDELIMITER----%cN----VALUEDELIMITER----%P----DELIMITER----');


$commits = explode("----DELIMITER----", $output);
$commits = array_map(
    function($v){
        return explode("----VALUEDELIMITER----", $v);
    },
    $commits
);
// last one is empty
array_pop($commits);

$commits = array_map(
    function($v){
        return [
            'commit_hash' => trim($v[0]),
            'message' => trim($v[1]),
            'author_name' => $v[2],
            'commiter_name' => $v[3],
            'parent_hashes' => $v[4],
        ];
    },
    $commits
);

$ignoredCommits = json_decode(file_get_contents(__DIR__.'/ignored_commits.json'), true);

$commits = array_filter(
    $commits,
    function($v) use ($ignoredCommits) {
        if (isset($ignoredCommits[$v['commit_hash']])) {
            return false;
        }
        if ($v['author_name'] === 'Magento Mirror') {
            return false;
        }
        if (preg_match("/Import Magento Release 1\.\d\.\d\d?.*/", $v['message'])) {
            return false;
        }
        if (preg_match("/Imported Magento Release 1\.\d\.\d\d?.*/", $v['message'])) {
            return false;
        }
        if (preg_match("/Import Magento 1\.\d\.\d\d?.*/", $v['message'])) {
            return false;
        }
        // filter out SUPEE Patches, as they are also part of Magento
        if (preg_match("/SUPEE-/", $v['message'])) {
            return false;
        }
        // filter merge commits out
        if (count(explode(" ", $v['parent_hashes'])) > 1) {
            return false;
        }
        return true;
    }
);

$commits = array_values($commits);
$dump[] = $commits;
$debug[] = $dump[] = count($commits);

file_put_contents(__DIR__.'/dump.json', json_encode($dump, JSON_PRETTY_PRINT));

var_dump($debug);
