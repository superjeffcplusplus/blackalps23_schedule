<?php

$opening = array(
    "id" => "opening",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Opening words",
    "lang" => "",
    "abstract" => "Opening words by Sylvain Pasini, president of the Black Alps association, and general chair of #BlackAlps24.",
    "movie" => "",


    //author1
    "a1" => array(
        "name" => "Sylvain Pasini",
        "position" => "Professor",
        "company" => "HEIG-VD, president of Black Alps",
        "bio" => "",
        "picture" => "Sylvain_Pasini.jpg",
        "twitter" => "",
        "linkedin" => "",
    ),
);


$k01 = array(
    "id" => "K01",
    "track" => "track-keynote",
    "room" => "La Marive",
    "title" => "Something highly confidential. Surprize!",
    "lang" => "en",
    "abstract" => "",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Confidential",
        "position" => "",
        "company" => "",
        "bio" => "",
        "picture" => "",
        "twitter" => "",
        "linkedin" => "",
    ),
);

$k02 = array(
    "id" => "K02",
    "track" => "track-keynote",
    "room" => "La Marive",
    "title" => "Are We on the Edge of an AI Cybercrime Armageddon? Separating Hype from Reality",
    "lang" => "en",
    "abstract" => "Are we standing at the edge of an AI Armageddon? With the rise of Generative AI (GenAI), cybercriminals are seemingly armed with unprecedented tools, flooding the digital world with sophisticated, unblockable threats. This talk aims to dissect the hype and uncover the reality behind the use of GenAI in cybercrime.
We will explore the growing use of deepfakes in scams, exemplified by a million dollar fake BEC video conference fraud. From son-in-trouble scams to KYC bypass schemes, deepfakes are becoming a versatile tool for cybercriminals.
Moving to phishing attacks, we’ll discuss how GenAI personalizes and automates social engineering, significantly increasing the volume of attacks.
We'll also showcase how GenAI can generate basic malware and explore advanced threats like polymorphic/metamorphic malware that dynamically adapts in real time. By clarifying the differences between AI-generated, AI-aided, and AI-powered threats, we reveal that while GenAI facilitates threat distribution, true AI-powered malware is still rare.
Concluding, we’ll address the common confusion between automation and AI-powered attacks, emphasizing that while GenAI scales and accelerates attacks, it does not fundamentally create completely new threat patterns. We will also highlight future research areas, such as exploiting zero-day vulnerabilities and supply chain attacks against GenAI. Join us to distinguish between the hype and the real impact of AI in cybercrime, and understand what this means for the future of cybersecurity defense.",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => " Candid Wüest ",
        "position" => "Advisor",
        "company" => " xorlab ",
        "bio" => "

Candid Wuest is an experienced cybersecurity expert with a strong blend of technical skills and over 25 years of passion in the field of security. He currently works as an independent security advisor for various companies and the Swiss government. Previously, he was the VP of Cyber Protection Research at Acronis, where he led the creation of the security department and the development of their EDR product. Before that, he spent more than sixteen years building Symantec's global security response team as the tech lead, analyzing malware and threats – from NetSky to Stuxnet. Wuest has published a book and various whitepapers and has been featured as a security expert in top-tier media outlets. He is a frequent speaker at security-related conferences, including RSAC and BlackHat, and organizer of AREA41 and BSidesZurich. He learned coding and the English language on a Commodore 64. He holds a Master of Computer Science from ETH Zurich and has various patents and useless certifications.
",
        "picture" => "candid.png",
        "twitter" => "@MyLaocoon",
        "linkedin" => "",
    ),
);

$t01 = array(
    "id" => "01",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Global Vulnerability Surveillance: Coordinated Disclosure on a Large Scale with Volunteers",
    "lang" => "en",
    "abstract" => "Victor Gevers from the Dutch Institute for Vulnerability Disclosure delivers a riveting exploration into the world of large-scale vulnerability disclosure, leveraging a highly effective coordinated, crowd-sourced approach. This talk dives deep into the urgent necessity for proactive vulnerability management and the enhancement of notification strategies. Gevers offers an exclusive behind-the-scenes look at the notorious 2021 Kaseya ransomware attack, where managed service providers (MSPs) and their customers fell prey to the REvil group's devastating cyber assault. With gripping insights, he reveals why such attacks could happen again and, more importantly, how they can be prevented.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Victor Gevers",
        "position" => "CTO",
        "company" => "DIVD",
        "bio" => "Victor Gevers, a renowned Dutch cybersecurity expert, has been making waves in the ethical hacking world since 1998. Co-founding the GDI Foundation in 2016 with a team of international ethical hackers, Gevers has uncovered major data leaks and even breached Donald Trump's Twitter account twice. His exploits in revealing vulnerabilities in critical infrastructures have been groundbreaking. In 2019, he became the chairman of the newly established Dutch Institute for Vulnerability Disclosure (DIVD), and by January 1, 2022, he was leading the R&D department. As CTO, Gevers is instrumental in shaping the DIVD Academy and serves as vice-chair at CSIRT Global. Balancing these roles, he also works as an innovation manager for the Dutch Central Government, driving forward cybersecurity advancements by day.
",
        "picture" => "",
        "twitter" => "",
        "linkedin" => "",
    ),
);

$t02 = array(
    "id" => "02",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "GlobalConfusion: TrustZone Trusted Application 0-Days by Design",
    "lang" => "en",
    "abstract" => "

Trusted Execution Environments form the backbone of mobile device security architectures. The GlobalPlatform Internal Core API is the de-facto standard that unites the fragmented landscape of real-world implementations, providing compatibility between different TEEs.

In our research we reveal that this API standard is prone to a design weakness. Manifestations of this weakness result in critical type-confusion bugs in real-world user-space applications of the TEE, called Trusted Applications (TAs). At its core, the design weakness consists of a fail-open design leaving an optional type check for untrusted data to TA developers. The API does not mandate this easily forgettable check that in most cases results in arbitrary read-and-write exploitation primitives. To detect instances of these type-confusion bugs, we design and implement GPCheck, a Ghidra-based static binary analysis system capable of vetting real-world TAs. We employ GPCheck to analyze 14,777 TAs deployed on widely used TEEs to investigate the prevalence of the issue. We reconfirm known bugs that fit this pattern and discover unknown instances of the issue in the wild. In total, we confirmed 9 known bugs, found 10 instances of silently-fixed bugs, and discovered a surprising amount of 14 0-days using our GPCheck prototype. Our findings affect mobile devices currently in use by billions of users. We responsibly disclosed these findings, already received >12,000 USD as bug bounty, and were assigned four CVEs. Ten of our 14 0-days are still in the responsible disclosure process.

It comes without surprise that a vulnerability in a single TA impacts the security of the entire device and, thus, vendors must rapidly fix such vulnerabilities and revoke vulnerable versions to prevent rollback attacks, i.e., loading an old version of the TA to exploit a known vulnerability. We will supplement the findings from above with a large-scale study on TA rollback prevention indicating severe deficiencies in the mobile ecosystem regarding the usage of N-days against TEEs.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Marcel Busch",
        "position" => "PostDoc",
        "company" => "EPFL",
        "bio" => "PostDoc at EPFL with the HexHive group. His current research focus is mobile security with a special interest in Android TEEs, re-hosting, and fuzzing. Outside of work, Marcel enjoys solving CTF challenges and captured flags with FAUST, Shellphish, p0lygl0ts, and the 0rganizers.",
        "picture" => "marcel.jpg",
        "twitter" => "@0ddc0.de",
        "linkedin" => "",
    ),

    "a2" => array(
        "name" => "Philipp Mao",
        "position" => "PhD",
        "company" => "EPFL",
        "bio" => "",
        "picture" => "philipp.jpg",
        "twitter" => "",
        "linkedin" => "",
    ),

);

$t03 = array(
    "id" => "03",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Now I See You: Pwning the Synology BC500 Camera",
    "lang" => "en",
    "abstract" => "Data privacy and network security are threatened by the rapid spread of Internet-connected devices. This includes IP cameras which can be found in both residential and commercial environments. This talk outlines step by step how we successfully hacked the Synology BC500 IP camera for Pwn2Own 2023 Toronto.",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Emanuele Barbeno",
        "position" => "IT Security Analyst",
        "company" => "Compass Security",
        "bio" => "Emanuele has 10 years of experience working in the area of IT security and he is an IT Security Analyst at Compass Security since 2019. As part of Compass Security's offensive security team, Emanuele conducts security analysis of web applications, external and internal networks, cloud infrastructures, as well as Android applications. Emanuele has responsibly disclosed vulnerabilities in different open source libraries and products, among others in products from Microsoft, Alibaba and others and is also responsible for giving various security-related trainings at Compass Security such as web application security and internal network with focus on the Active Directory security.",
        "picture" => "",
        "twitter" => "@compasssecurity",
        "linkedin" => "https://www.linkedin.com/company/compass-security-ag",
    ),
);


$t04 = array(
    "id" => "04",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Who dat? - Sender-constraining personal access tokens",
    "lang" => "en",
    "abstract" => "

Access tokens get inadvertently disclosed by users online and such leaks are a common problem that security teams deal with. Coupled with the fact that a leaked access token lets a malicious user use them without any constraints adds to the problem. If the leaked access token has high-privileges that compounds the impact of such a leak. There haven’t been many mitigations that an application or a user generating an access token could use to reduce or eliminate the impact of a token misuse until RFC 9449 came about which introduced a concept called Demonstrating Proof of Possession (DPoP) for OAuth access tokens.

Proof-of-possession is a security mechanism at the application level that sender-constrains access tokens by using public/private key pairs. It binds the generated access token to a user's public key and thereby requires attackers to prove possession of the corresponding private key when using that access token. This constrains the access token to the user who generated it, as only they have access to their private key and gives the application, that is receiving the access token, added assurance that it is indeed the user who generated the access token that is using it and no one else. At GitLab, we are working on implementing the DPoP mechanism for Personal Access Tokens to eliminate the impact of accidental token disclosures.

In this talk, we will establish why accidental token disclosures are a problem, discuss the DPoP mechanism that we are implementing for personal access tokens, share the technical blueprint we wrote and also demonstrate the PoC showing the solution in action. Participants will leave this talk with a greater understanding of the utility of a mechanism like DPoP and how it can eliminate the problem of access token misuse.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Vitor Meireles",
        "position" => "Security Engineering Manager",
        "company" => "GitLab",
        "bio" => "Vitor Meireles is a security professional with over 15 years of experience in the field. Currently serving as a Security Engineering Manager at GitLab, he helps engineering teams build applications that are secure by design. He likes understanding how code works in unexpected scenarios and enjoys exploring vulnerabilities by breaking code. Vitor has past experiences in the consulting, financial and trading industries as well. He is based in Switzerland.",
        "picture" => "",
        "twitter" => "@muffinbox33",
        "linkedin" => "https://www.linkedin.com/in/vitor-meireles-4706862",
    ),
    "a2" => array(
        "name" => "Rohit Shambhuni",
        "position" => "Staff Application Security Engineer",
        "company" => "GitLab",
        "bio" => "Rohit Shambhuni works as a Staff Application Security Engineer at GitLab. He likes building secure applications and, in turn, breaking them. He holds a Master's degree in Computer Science from Arizona State University and has about a decade of experience in the Security domain. He has presented in Black Hat Asia Arsenal 2019, BSides Bangalore 2024.

Apart from work, he likes to read in his free time, explore new places, watch and geek about movies.",
        "picture" => "",
        "twitter" => "",
        "linkedin" => "https://www.linkedin.com/in/shambho/",
    ),
);

$t05 = array(
    "id" => "05",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "The pitfalls of Fully Homomorphic Encryption: when IND-CPA security is not enough",
    "lang" => "en",
    "abstract" => "In 2021 Li and Miccianci showed that the notion of IND-CPA security is not always sufficient to provide passive security in the context of approximate homomorphic encryption. As a solution, they introduced the notion of IND-CPA-D security but left open the question on how to achieve it efficiently in practice. Shortly after, it was shown that all mainstream lattice based FHE schemes actually end up being vulnerable to the same attack and that they also need to satisfy the notion of IND-CPA-D security in these scenarios.

Since then the FHE community has been divided and caught in an iterative process on how to achieve IND-CPA-D security in a practical and provable way, with most of the proposed solutions ending up being either broken or impractical.

Can IND-CPA-D security be achieve in a way that is both practical and provably secure?",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Jean-Philippe Bossuat",
        "position" => "Senior Cryptographer Homomorphic Encryption",
        "company" => "Gauss Labs PTE. LTD.",
        "bio" => "",
        "picture" => "jean-philippe.jpg",
        "twitter" => "",
        "linkedin" => "https://www.linkedin.com/in/jean-philippe-bossuat/",
    ),
);

$t06 = array(
    "id" => "06",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Crypto wallet - What could go wrong ?",
    "lang" => "en",
    "abstract" => "

Cryptocurrencies such as Bitcoin or Ethereum require a private key to prove ownership of the asset. Most often, this key is generated and stored by software called a crypto wallet.

A crypto wallet is generally responsible to:

    Generate seed phrase and associated private keys

    Store the private keys securely

    Provide a way to sign transactions, interact with applications (dApps), move the funds, ...

Several hacks and vulnerabilities are related to crypto wallets. The presentation will consist of the study of several vulnerabilities that have affected known wallets: bad cryptography implementation (Randomness, MPC, IOTA wallet), Supply chain Attack (Ledger Connect kit, IOTA Trinity wallet), smart contract bug (Parity hack).

This presentation does not consider vulnerabilities which target the user, e.g. to sign a malicious transaction.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Ryan Sauge",
        "position" => "Security engineer",
        "company" => "Taurus SA",
        "bio" => "",
        "picture" => "",
        "twitter" => "@ADCDIII",
        "linkedin" => "https://www.linkedin.com/in/ryan-sauge/",
    ),
);


$t07 = array(
    "id" => "07",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Unveiling the offensive potential of Group Policy Objects in Active Directory: old - and new GPO ACLs attack vectors",
    "lang" => "en",
    "abstract" => "Group Policy Objects (GPOs) are a fundamental Active Directory mechanism, responsible for domain objects management and the conditional deployment of specific configurations. Despite the central role played by GPOs in any Active Directory environment, exploitation paths relying on permissions related to GPOs received comparatively little attention. This presentation aims at demonstrating the potential of Group Policy Objects from an offensive standpoint by describing standard / known attack vectors targeting GPO ACLs, but also a new, more versatile exploitation technique recently published by the speaker.

The research behind the talk stem from a pentest performed on an Active Directory environment, during which permissive ACLs on sensitive Group Policy Objects were discovered. An overview of the standard, existing attack vectors available when targeting GPOs permissions was performed - which however also highlighted some of their limits. More specifically, it was observed that such existing attack vectors were not applicable in NTLM relaying scenarios, which was precisely the position of the auditor during the tests. As a result, an alternative attack vector relying on the manipulation of the gPCFileSysPath LDAP attribute was developed, allowing a safer and stealthier exploitation of GPO ACLs that is also applicable in NTLM relaying scenarios.",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Quentin Roland",
        "position" => "Security expert",
        "company" => "Synacktiv",
        "bio" => "",
        "picture" => "quentin.jpeg",
        "twitter" => "@croco_byte",
        "linkedin" => "https://www.linkedin.com/in/quentin-roland-07b944179/",
    ),
);

$t08 = array(
    "id" => "08",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Reach the Nirvana : Hijack, Inject, Sleep",
    "lang" => "en",
    "abstract" => "

The Nirvana Hooking is an instrumentation callback mechanism implemented on Windows for debugging purpose.

It works by allowing a user to define a custom callback function that will be called by the KERNEL after each SYSCALL performed by the process.

While this method is well known, it has mainly been used to intercept SYSCALL and no specific use of this mechanism has been clearly documented.

During this talk, you will see an introduction to Nirvana Hooking: what is it, how is it possible to register a Nirvana Hook, what can be done from this hook.

Then, when the basics are explained, you will see how it is possible to weaponize this mechanism through three different use cases :
- Syscall hijacking: this is the most common way to use the Nirvana Hook and it allows an attacker to intercept each syscall to perform additional action or change the SYSRET code.
- Threadless process injection: see how a Nirvana Hook can be used to achieve threadless injection on a remote process and the limitation.
- Sleep obfuscation: when using C2 beacon, the beacon sleep phase is a critical step where EDR can detect the beacon due to unclean stacks, use of specific functions, etc... In this talk you will see how you can leverage Nirvana Hook to get clean sleep obfuscation mechanism.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Yoann Dequeker",
        "position" => "RedTeam Leader",
        "company" => "Wavestone",
        "bio" => "Yoann Dequeker (@OtterHacker) is a red team operator at Wavestone entitle with OSCP and CRTO certification. Aside from his RedTeam engagement and his contribution to public projects such as Impacket, he spends time working on Malware Developpement to ease beacon deployment and EDR bypass during engagements and is currently developing a fully custom C2.

His research leads him to present his results on several conferences such as LeHack (Paris), Insomni'hack (Swiss) or even through a 4-hour workshop at Defcon31 (Las Vegas). All along the year, he publishes several white papers on the techniques he discovered or upgraded and the vulnerabilities he found on public products.",
        "picture" => "",
        "twitter" => "@OtterHacker",
        "linkedin" => "",
    ),
);

$t09 = array(
    "id" => "09",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Start them early and keep on keepin’ on. An industry perspective on automated protocol analysis for designing and iterating cryptographic protocols",
    "lang" => "en",
    "abstract" => "Due to the ever-evolving needs of applications, cryptographic best-practice recipes are sometimes ill-fitted to the problem at hand. Consequently, subtle changes to robust protocols are frequently introduced without rigorous analysis, leading to potentially catastrophic outcomes. The recently discovered vulnerabilities in Telegram, Threema, and MEGA demonstrate the importance of rigorous analysis.
Although “Don’t roll your own” is helpful advice, it fails to provide tools to reduce the risks of novel cryptographic designs. In contrast, automated protocol analysis has the potential to help strengthen the initial protocol design and support future iterations of the protocol. This talk presents an industry perspective on automated protocol analysis, its impact on security audits we perform at Trail of Bits, and the value it provides to our customers. Automated analysis has limits, and we will discuss them.
This talk is also a call to the community to reflect on possible improvements to existing tooling, including usability and continuous translation of insights from real-world attacks and formal analysis into actionable items for application developers. A fruitful collaboration on increased usability, meaningful security goals, and analyses with automated tooling has the potential to make automated analysis an invaluable layer in the Swiss-cheese model for security systems that rely on cryptography.",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Marc Ilunga",
        "position" => "Security Engineer II (Cryptography)",
        "company" => "Trail of Bits",
        "bio" => "

Marc Ilunga is a cryptography analyst at Trail of Bits. He reviews a wide array of cryptographic protocols, such as threshold signature schemes, zk-snarks, and secure communications. He is also interested in provable security and how it relates to real-world deployments. He co-published an analysis of the EDHOC protocol (RFC 9528) and contributed to its design. He is also interested in infosec at large and previously worked as a pentester.",
        "picture" => "marc.jpeg",
        "twitter" => "@MarciIlunga",
        "linkedin" => "https://www.linkedin.com/in/marc-ilunga-7904b2114/",
    ),
);


$t10 = array(
    "id" => "10",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Broken isolation - draining your credentials from popular macOS password managers",
    "lang" => "en",
    "abstract" => "In theory, theory and practice are the same. In theory, all modern macOS applications must be isolated what is enforced by notarization and sandboxing. In practice these enforcements are usually ineffective. This talk starts by explaining basic isolation assumptions and quickly shifts to exploitation. I have selected a few the most popular macOS password managers written in different technologies to prove how a low-privileged malware can abuse various tricks and 0,n-day vulnerabilities to drain your credentials.

During this talk you will:
- learn how macOS hardened runtime, sandboxing, and TCC app management privilege work
- see 0,n-day vulnerabilities and architectonical problems I have found in popular macOS password managers
- understand why software distributed via websites is sometimes more secure than from the Apple Mac App Store
- see my exploits and a lot of demos

After the talk, the audience should be able to explain macOS isolation mechanisms (in)security, check their password managers for presented vulnerabilities, and effectively support their macOS blue/red teams. ",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Wojciech Regula",
        "position" => "Head of Mobile Security",
        "company" => "Securing",
        "bio" => "Wojciech Regula is a Principal IT Security Specialist working at SecuRing. He specializes in application security on Apple devices. He has created the iOS Security Suite - an open-source anti-tampering framework. Bugcrowd MVP, has found vulnerabilities in Apple, Facebook, Malwarebytes, Slack, Atlassian, and others. In his free time, he runs an infosec blog - https://wojciechregula.blog. He has shared his research at, among others, Black Hat US & EU, DEF CON, Objective by the Sea, NULLCON, and CONFidence.",
        "picture" => "wojciech.jpg",
        "twitter" => "@_r3ggi",
        "linkedin" => "https://www.linkedin.com/in/wojciech-regula/",
    ),
);

$t11 = array(
    "id" => "11",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "Iconv, set the charset to RCE: exploiting the glibc to hack the PHP engine",
    "lang" => "en",
    "abstract" => "A few months ago, I stumbled upon a 24 years old buffer overflow in the glibc. Despite being reachable in multiple well-known libraries or programs, it proved rarely exploitable. Indeed, this was not a good bug: with hard-to-achieve preconditions, it did not even provide a nice primitive. A 1 to 3 bytes overflow, with uncontrolled bytes, with heavy requirements, proved very hard to find in the wild. On PHP however, it lead to amazing results: a new exploitation technique that affects the whole PHP ecosystem, and the compromission of several applications.

This talk will first walk you through the discovery of the bug and its limitations, before describing the conception of several remote binary PHP exploits, and through them offer unique insight in the internal of the engine of the web language, and the difficulties one faces when exploiting it. Every concept will be described along the way: from understanding the power of file reads in PHP, to describing its heap and internal structures.

After exploiting the bug using PHP filters, I will showcase the exploitation of direct calls to iconv() on a popular PHP webmail. In both cases, I will describe the impact on the PHP ecosystem, and document the manner I used to build exploits.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Charles Fol",
        "position" => "Security Researcher",
        "company" => "Lexfo",
        "bio" => "Charles Fol, also known as cfreal, is a security researcher at LEXFO / AMBIONICS. He has discovered remote code execution vulnerabilities targeting renowned CMS and frameworks such as Drupal, Magento, Symfony or Laravel, but also enjoys binary exploitation, to escalate privileges (Apache, PHP-FPM) or compromise security solutions (DataDog’s Sqreen, Fortinet SSL VPN, Watchguard). He is the creator for PHPGGC, the go-to tool to exploit PHP deserialization, and has been working with PHP for most of his life.",
        "picture" => "charles.jpg",
        "twitter" => "@cfreal_",
        "linkedin" => "",
    ),
);

$t12 = array(
    "id" => "12",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "GCP CL-WHY: The Hacker's and the Hero's Guide to the CLI",
    "lang" => "en",
    "abstract" => "The Google Cloud Platform Command Line Interface (GCP CLI) is a powerful tool for developers and administrators, but it poses a significant risk when exploited by threat actors. This talk explores how threat actors can leverage the GCP CLI for initial access and data exfiltration. We'll examine the GCP CLI, its associated credentials, how attackers steal these credentials, and ways they can bypass misconfigured security controls. Crucially, we'll delve into a multi-layered defense strategy to secure the GCP CLI. Finally, the talk will cover proactive detection methods to alert you to GCP CLI-based intrusion attempts. Join this session to learn how to effectively protect your cloud environment against these sophisticated attacks.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Shannon McHale",
        "position" => "Senior Red Team Consultant",
        "company" => "Google",
        "bio" => "Shannon McHale is a Senior Consultant on the Mandiant (Now Part of Google Cloud) Red Team. Shannon has lead the development of the cloud service lines at Mandiant since 2022 and formerly held the GCP Security Engineer Certification. She has presented at DefCon, WiCyS, ShmooCon, and more. She has prioritized giving back to the security community through presentations and mentoring those just beginning their career.",
        "picture" => "shannon.png",
        "twitter" => "@_shannon_mchale",
        "linkedin" => "",
    ),
);

$t13 = array(
    "id" => "13",
    "track" => "track-conf",
    "room" => "La Marive",
    "title" => "IDAT Loader: The Malware’s Camouflaged Weapon",
    "lang" => "en",
    "abstract" => "As sophisticated as GuLoader; a highly obfuscated and evasive malware loader, Here comes a similar loader with various evasion capabilities built-in to execute malware stagers in memory; The IDAT Loader. First seen in August 2023, WatchTower has analyzed and identified multiple attack chains delivering malwares like Lumma, Redline, Danabot, Vidar and Amadey. We have found two variants of IDAT loader in the wild, specifically Vidar and Lumma operators using the first variant, where threat actors use a C2 to download decoy PNG files with a malicious IDAT section and the other variant containing the decoy packed within itself eliminating the the malicious C2 connection.

The IDAT loader first contacts a legitimate domain, followed by a request to a C2 server to download a PNG file. This PNG is a decoy that contains malicious shellcode and the process it needs to be injected into using Process Doppelganging. The loader searches for the string “IDAT'' DWORD in the downloaded PNG file to fetch the XOR key that immediately follows, and the rest is encrypted data. Once the data is decrypted, it holds the decompressed data, which is later decompressed using RtlDecompressBuffer. The result contains the shellcode and the name of the legitimate Windows process to again inject into.

We will present on the code-level reverse engineering of both variants of IDAT loader used to deploy Amadey, Raccoon, Lumma, and Vidar, and discuss the similarities between their code blocks. Our presentation will conclude with a discussion of our hunting techniques, which we use to stay ahead of IDAT loader campaigns and protect our customers globally.
",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Niranjan Jayanand",
        "position" => "",
        "company" => "",
        "bio" => "Experienced researcher and manager for Threat Hunting and Threat Intelligence services, Conference speaker, author, reverse engineer, APT research",
        "picture" => "",
        "twitter" => "",
        "linkedin" => "https://www.linkedin.com/in/jniranjan/",
    ),
);

$t14 = array(
    "id" => "14",
    "track" => "track-ll",
    "room" => "La Marive",
    "title" => "Rump session",
    "lang" => "en/fr",
    "abstract" => "Participants can propose short talks. Please send your talk to <a id=\"href-email-rump\" href=\"mailto:\"><span id=\"span-email-rump\"></span><!--javascript--></a> in <b>pdf</b> format",
    "movie" => "",
    "slides" => "",

    "a1" => array(
        "name" => "Several speakers",
        "position" => "",
        "company" => "",
        "bio" => "",
        "picture" => "",
        "twitter" => "",
        "linkedin" => "",
    ),
);
