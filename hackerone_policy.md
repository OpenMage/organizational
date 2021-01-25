No technology is perfect, and OpenMage believes that working with skilled security researchers across the globe is crucial in identifying weaknesses in any technology. If you believe you've found a security issue in our product or service, we encourage you to notify us. We welcome working with you to resolve the issue promptly. 

# Disclosure Policy

We agree to follow HackerOne's [disclosure guidelines](https://www.hackerone.com/disclosure-guidelines) and expect that you agree to the same. Please read these guidelines and abide by them when disclosing a vulnerability. Additionally:

* Let us know as soon as possible upon discovery of a potential security issue, and we'll make every effort to quickly resolve the issue. 
* Provide us a reasonable amount of time to resolve the issue before any disclosure to the public or a third-party. We may share the details of the disclosure with other parties that are contributors to the OpenMage LTS project so that they may also have time to resolve the issue before any disclosure to the public.
* Make a good faith effort to avoid privacy violations, destruction of data, and interruption or degradation of our service. Only interact with accounts you own or with explicit permission of the account holder. 

# Activity
While researching, we'd like to ask you to refrain from the following activities on OpenMage, or any production systems running OpenMage software: 
* Denial of service 
* Spamming 
* Social engineering (including phishing) of OpenMage staff or contractors 
* Any physical attempts against OpenMage property or data centers 

# Exclusions
When reporting vulnerabilities, please consider (1) attack scenario/exploitability, and (2) security impact of the bug. The following issues are considered out of scope:

* Vulnerabilities in custom code developed by merchants.
* Vulnerabilities in extensions available from the extension market.
* Clickjacking on pages with no sensitive actions.
* Vulnerabilities that require disabling security features enabled in default configurations.
* Unauthenticated/logout/login CSRF.
* Attacks requiring MITM or physical access to a user's device.
* Use of known-vulnerable libraries without proof of exploitation, e.g. OpenSSL.
* Comma Separated Values (CSV) injection without demonstrating a vulnerability.
* Missing best practices in SSL/TLS configuration.
* Content spoofing and text injection issues without showing an attack vector/without being able to modify HTML/CSS
* Cross-Site Scripting (XSS) bugs in the admin interface (URLs containing /admin/) where the code is only executed in front-end context but not in admin context. Merchants are explicitly allowed to use active content when designing their stores, so this is a required feature. The admin XSS capability does not give the administrator any additional powers to do harm beyond what other administrative features already allow. XSS issues where an administrator with limited access can impact other administration pages are valid.
* Vulnerabilities that require extensive or obtuse social engineering. For example, a user typing an XSS into an input field, and then submitting the form to trigger a non-persistent XSS.
* Open Redirects/Forwards when leaving the site.
* Missing HTTP security headers, specifically [http security headers](https://www.owasp.org/index.php/List_of_useful_HTTP_headers).
* Reports from automated scripts or scanners (without proof of exploitation).

# Program Policies
Researchers who are the first to report a vulnerability will be the researcher acknowledged in the release notes once the vulnerability is resolved. If there are additional team members involved in researching the vulnerability, please provide their name(s) and what their contribution was to the findings when submitting this report.

# Safe Harbor 
Any activities conducted in a manner consistent with this policy will be considered authorized conduct and we will not initiate legal action against you. If legal action is initiated by a third party against you in connection with activities conducted under this policy, we will take steps to make it known that your actions were conducted in compliance with this policy. 

# Ineligible participants
This Program is not open to individuals who reside in Cuba, Iran, North Korea, Sudan or Syria.

Thank you for helping keep OpenMage and our users safe!
