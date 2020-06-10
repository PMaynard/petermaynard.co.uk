+++
title = "Towards Understanding Man-on-the-Side Attacks (MotS) in SCADA Networks"
date = 2020-04-30T13:47:31Z
year = "2020"
authors = ["Peter Maynard", "Kieran McLaughlin"]
keywords = []
abstract = "We describe a new class of packet injection attacks called Man-on-the-Side Attacks (MotS), previously only seen where state actors have 'compromised' a number of telecommunication companies. MotS injection attacks have not been widely investigated in scientific literature, despite having been discussed by news outlets and security blogs. MotS came to attention after the Edward Snowden revelations, which described large scale pervasive monitoring of the Internet's infrastructure. For an advanced adversary attempting to interfere with IT connected systems, the next logical step is to adapt this class of attack to a smaller scale, such as enterprise or critical infrastructure networks. MotS is a weaker form of attack compared to a Man-in-the-Middle (MitM). A MotS attack allows an adversary to read and inject packets, but not modify packets sent by other hosts. This paper presents practical experiments where we have implemented and performed MotS attacks against two testbeds: 1) on HTTP connections, by redirecting a victim to a host controlled by an adversary; and 2) on an Industrial Control network, where we inject falsified command responses to the victim. In both cases, the victims accept the injected packets without generating a suspiciously large number of unusual packets on the network. We then perform an analysis of three leading Network IDS to determine whether the attacks are detected, and discuss mitigation methods."

proceedings = "International Conference on Security and Cryptography (SECRYPT)"
type = "Conference"
forthcoming = "false"
doi = ""
poster = ""
access_url = "https://arxiv.org/abs/2004.14334"
pdf_url = ""
slides = ""
+++

Code available at <https://github.com/pmaynard/mots>

{{< vimeo 427795777 >}}
