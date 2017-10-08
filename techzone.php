<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edge of Tomorrow DVD Rentals - Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/palette.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto">
    <meta name="description" content="Edge of Tomorrow DVD Rentals.">
    <!-- blog-specific styles -->
    <style>
        .blog {
            padding: 10px 40px;
        }
        .blog h2 {
            border-top: 3px solid #BDBDBD;
            border-left: none;
            text-align: center;
        }

        .blog h3 {
            border-left: 3px solid #BDBDBD;
        }

        .blog figcaption {
            color: #757575;
            text-align: center;
        }
        .blog img {
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php include 'html_includes/header_nav.inc'; ?>
        <script type = "text/javascript">
            document.getElementById("techzoneNav").className = "currentpage";
        </script>
        <aside>
            <h3>TechZone rep</h3>
            <img src="images/headshot.jpg" alt="TechZone rep - Jennifer">
            <p>
                Our TechZone rep, Jennifer, giving advice on all things tech.
            </p>
        </aside>
        <main>
            <h1>TechZone</h1>
                <p>
                    Welcome to the TechZone! Our resident TechZone rep Jennifer is here to help you with regular tech advice columns.
                </p>
                <p>
                    In this installment, we look at web server options, with a particular focus on IIS vs. Apache.
                </p>
            <div class="blog">
                <h2>Which web server should you choose – IIS or Apache?</h2>
                <p>
                    If you want your business to have a presence on the Internet, at some point you will need to decide on a "technology stack". The "stack" is the combination of software and programming languages you choose to create your application or website (Edelman 2017). In many cases, what you choose for one layer of your stack will affect your choice in other layers. Your choices in your stack may have long-lasting ramifications for many areas of your business, so it's important to get these decision right and to make them as early as possible – preferably with help from professionals. That's why we're here to help!
                </p>
                <p>
                    In this TechZone article, we're going to focus on one key layer of your stack – the web server. We'll compare and contrast the two biggest players in the market – Apache and IIS – and briefly touch on another alternative you may hear thrown around. We'll also look at the costs involved in running the two major options. Finally, we'll provide a recommendation for what option you should choose for your business.
                </p>
                <h3>Market share</h3>
                <p>
                    The market share of web servers is difficult to measure (Greenstein 2013). Not all web servers are public facing and therefore easily scannable, and each web server may serve many websites (or none at all, but serve as an API environment without an easily visible presence). The most widely-cited source of web server market share is Netcraft.com. Each month Netcraft (Netcraft 2017) publishes a survey of web server market share which compares each product based on several dimensions:
                </p>
                <ul>
                    <li>Market share of all sites</li>
                    <li>Market share of active sites (sites that actually have content, not just domain hosting company templates)</li>
                    <li>Market share of the top million busiest sites</li>
                    <li>Market share of computers</li>
                </ul>
                <p>
                    Each of these dimensions gives a different answer for the question "which web server has the largest market share?", as you can see in the graphs below for July:
                </p>
                <figure>
                    <figcaption>
                        <img src="images/marketshare_allsites.PNG" alt="Market share - all sites"><br>
                        Market share - all sites
                    </figcaption>
                </figure>
                <figure>
                    <figcaption>
                        <img src="images/marketshare_activesites.PNG" alt="Market share - active sites"><br>
                        Market share - active sites
                    </figcaption>
                </figure>
                <figure>
                    <figcaption>
                        <img src="images/marketshare_busiestsites.PNG" alt="Market share - busiest sites"><br>
                        Market share - busiest sites
                    </figcaption>
                </figure>
                <figure>
                    <figcaption>
                        <img src="images/marketshare_computers.PNG" alt="Market share - computers"><br>
                        Market share - computers
                    </figcaption>
                </figure>
                <p>
                    There's a few trends to note overall in the graphs:
                </p>
                <ul>
                    <li>Apache's share is consistently falling for quite a while now, no matter the dimension used</li>
                    <li>While IIS's share of all sites is now over 50%, on every other dimension it is also steadily falling</li>
                    <li>NGINX's share has been slowly but steadily rising over each dimension (apart from a small recent blip in the "all sites" dimension)</li>
                </ul>
                <h3>Closer look: Apache</h3>
                <p>
                    Apache has traditionally been considered more secure than IIS, as IIS is a Microsoft product and Microsoft products are high priority targets for malware (Monroe 2010). However, Apache's popularity has resulted in more malware specifically targeting it (Constantin 2013).
                </p>
                <p>
                    One of the biggest pros for Apache is cost: as an open-source project, Apache is free, and can run on open-source operating systems such as Linux or Unix (which are also free). We'll look a bit further into cost comparisons in the Cost (LINK) section below.
                </p>
                <p>
                    Apache's open-source nature means it is also very flexible and configurable – with the resulting caveat that it can be difficult to configure for beginners. However, open-source means that there is a very large, broad community of contributors who can respond quickly to fix vulnerabilities, and provide community support.
                </p>
                <p>
                    While Apache is often paired with the Linux operating system in the "LAMP" stack (Linux, Apache, MySQL, PHP), it can also run on Windows (Lunarpages 2014).
                    One big con for Apache is that it is a process-based server (Upguard 2017), which can result in significant overhead if there are many simultaneous connections, particularly on Windows.
                </p>
                <p>
                    It's important to note that Apache's version 2.2 is now EOL (end-of-life) with release 2.2.34. No further updates are planned for version 2.2.x. If you're considering Apache, make sure that you choose the latest release – 2.4.27 at the time of writing this article.
                </p>
                <h3>Closer look: IIS</h3>
                <p>
                    Because IIS is a Microsoft product, it comes with the support of Microsoft's resources. Although Microsoft can't draw on a huge open-source community to address vulnerabilities like Apache can, it can throw its considerable resources at problems as they arise (Upguard 2017).
                </p>
                <p>
                    IIS is closely tied to Windows and can't run on any operating system other than Windows (Monroe 2010), which reduces its flexibility. However, its ties to Microsoft mean that it supports Microsoft's .NET framework and ASPX scripting (Lunarpages 2014). However, .NET support can also be achieved within Apache via the Mono Project (Mono 2017).
                </p>
                <p>
                    While IIS itself is free, its tie to Windows means that choosing IIS means paying for Windows licensing in some fashion. More on this in the Cost (LINK) section below.
                </p>
                <p>
                    IIS 10 is the latest version and is included with Windows Server 2016 and Windows 10. IIS 7.5 was included with Windows Server 2008 R2 and Windows 7. IIS 8.5 was included with Windows Server 2012 R2 and Windows 8.1. Because IIS is considered a component of the Windows Server and Windows major products, its follows its parent product's support lifecycle (Microsoft 2017a). This means that IIS 7.5 is now in its "extended support" phase (Microsoft 2017b), which essentially means it is now EOL. This will also happen for IIS 8.5 within the next 12 months or so (Microsoft 2017c). If you're considering IIS, it's recommended you choose IIS 10 on Windows Server 2016.
                </p>
                <h3>Another alternative: NGINX</h3>
                <p>
                    NGINX is another open-source option which is used by some of the busiest sites on the Internet, such as Netflix, WordPress, Pinterest, and others (NGINX 2017). It was specifically designed to use asynchronous and lightweight architecture to address the problem of very high simultaneous connections, which plagues Apache. This has seen its market share steadily rise, as seen in the Market share (LINK) section above.
                </p>
                <p>
                    However, NGINX is still a specialised option and is not usually offered by generalist web hosting companies such as GoDaddy (GoDaddy 2017).
                </p>
                <h3>Costs</h3>
                <p>
                    On the surface, cost seems like a no-brainer: Apache is free and can run on free operating systems, while IIS is free but needs Windows licensing. That means you should just choose Apache, right? Not so fast!
                </p>
                <p>
                    While Linux is technically free, I doubt you as a business owner know how to configure and maintain it. You will probably want to choose a Linux distribution (Linux comes in many different "flavours") which also has a support option, such as Ubuntu. Ubuntu support for servers starts at USD$750 per year (Ubuntu 2017).
                </p>
                <p>
                    In comparison, to choose IIS means to choose Windows Server licensing headaches. With Windows Server 2016, Microsoft changed their licensing model to a per-core model (O'Shea 2016), which is quite confusing. Essentially, this means a big, beefy web server with many cores (a core is just the basic processing unit of a computer – more cores means more things can be done at once) will need more licences. At minimum, Windows Server 2016 assumes 16 cores and prices accordingly – you can't get less than 16 core licences. On top of that, any users that connect to your server remotely also need what's called a Client Access License (CAL) from Microsoft. The cheapest possible option for 16 cores and 5 CALs is AUD$1,913 (Microsoft 2017d).
                </p>
                <p>
                    Web hosting companies may charge differently depending on your chosen stack. However, a large web hosting company like GoDaddy will generally charge the same price for either option (GoDaddy 2017). Depending on your chosen web hosting company, this may affect the cost.
                </p>
                <h3>Recommendation</h3>
                <p>
                    In general, an Apache stack is going to be cheaper and more flexible than an IIS stack. If you're planning on using .NET or ASP, it may be easier to choose IIS for support out-of-the-box. You'll also want to avoid Apache if you're expecting to have an extremely high (enterprise-scale) number of simultaneous requests. Otherwise, Apache will probably be the better choice, especially for smaller businesses.
                </p>
                <p style="color:#757575">Word count: 1302</p>
                <div>
                    <h3>Bibliography</h3>
                    Constantin, L 2013, <i>Cyber criminals offer malware for Nginx, Apache Web servers</i>, Viewed 21 August 2017, <a href="http://www.computerworld.com/article/2487164/malware-vulnerabilities/cyber-criminals-offer-malware-for-nginx--apache-web-servers.html" target="_blank">&lt;http://www.computerworld.com/article/2487164/malware-vulnerabilities/cyber-criminals-offer-malware-for-nginx--apache-web-servers.html&gt;</a>.<br>
                    Edelman, G 2017, <i>How to choose your tech stack</i>, Viewed 21 August 2017, <a href="https://svsg.co/how-to-choose-your-tech-stack" target="_blank">&lt;https://svsg.co/how-to-choose-your-tech-stack&gt;</a>.<br>
                    GoDaddy 2017, <i>Web hosting</i>, Viewed 21 August 2017, <a href="https://au.godaddy.com/hosting/web-hosting" target="_blank">&lt;https://au.godaddy.com/hosting/web-hosting&gt;</a>.<br>
                    Greenstein, S 2013, 'How much Apache?' <i>Micro Economics</i>,13 December 2013, pp. 79-80.<br>
                    Lunarpages 2014, <i>Apache vs. IIS: Which web server should you choose?</i>, Viewed 21 August 2017, <a href="https://lunarpages.com/apache-vs-iis-which-web-server-should-you-choose" target="_blank">&lt;https://lunarpages.com/apache-vs-iis-which-web-server-should-you-choose&gt;</a>.<br>
                    Microsoft 2017a, <i>Search product lifecycle - Internet Information Services 7.5</i>, Viewed 21 August 2017, <a href="https://support.microsoft.com/en-us/lifecycle/search?alpha=Microsoft%20Internet%20Information%20Services%207.5" target="_blank">&lt;https://support.microsoft.com/en-us/lifecycle/search?alpha=Microsoft%20Internet%20Information%20Services%207.5&gt;</a>.<br>
                    Microsoft 2017b, <i>Search product lifecycle - Windows Server 2008 R2</i>, Viewed 21 August 2017, <a href="https://support.microsoft.com/en-us/lifecycle/search?sort=PN&alpha=Windows%20Server%202008%20R2&Filter=FilterNO" target="_blank">&lt;https://support.microsoft.com/en-us/lifecycle/search?sort=PN&alpha=Windows%20Server%202008%20R2&Filter=FilterNO&gt;</a>.<br>
                    Microsoft 2017c, <i>Search product lifecycle - Windows Server 2012 R2</i>, Viewed August 21 2017, <a href="https://support.microsoft.com/en-us/lifecycle/search?alpha=Windows%20Server%202012%20R2" target="_blank">&lt;https://support.microsoft.com/en-us/lifecycle/search?alpha=Windows%20Server%202012%20R2&gt;</a>.<br>
                    Microsoft 2017d, <i>Windows Server 2016 standard 5-client access license (English)</i>, Viewed 21 August 2017, <a href="https://www.microsoft.com/en-au/store/d/windows-server-2016-standard/dg7gmgf0ds12/0005" target="_blank">&lt;https://www.microsoft.com/en-au/store/d/windows-server-2016-standard/dg7gmgf0ds12/0005&gt;</a>.<br>
                    Mono 2017, <i>mod_mono</i>, Viewed 21 August 2017, <a href="http://www.mono-project.com/docs/web/mod_mono" target="_blank">&lt;http://www.mono-project.com/docs/web/mod_mono&gt;</a>.<br>
                    Monroe, R 2010, <i>Which web server: IIS vs. Apache</i>, Viewed 21 August 2017, <a href="https://blog.hostway.com/blog/which-web-server-iis-vs-apache" target="_blank">&lt;https://blog.hostway.com/blog/which-web-server-iis-vs-apache&gt;</a>.<br>
                    Netcraft 2017, <i>July 2017 web server survey</i>, Viewed 21 August 2017, <a href="https://news.netcraft.com/archives/2017/07/20/july-2017-web-server-survey.html" target="_blank">&lt;https://news.netcraft.com/archives/2017/07/20/july-2017-web-server-survey.html&gt;</a>.<br>
                    NGINX 2017, <i>Welcome to NGINX Wiki!</i>, Viewed 21 August 2017, <a href="https://www.nginx.com/resources/wiki" target="_blank">&lt;https://www.nginx.com/resources/wiki&gt;</a>.<br>
                    O'Shea, M 2016, <i>Windows Server 2016 licensing model</i>, Viewed 21 August 2017, <a href=https://blogs.technet.microsoft.com/ausoemteam/2016/07/26/windows-server-2016-licensing-model" target="_blank">&lt;https://blogs.technet.microsoft.com/ausoemteam/2016/07/26/windows-server-2016-licensing-model&gt;</a>.<br>
                    Ubuntu 2017, <i>Plans and pricing</i>, Viewed 21 August 2017, <a href="https://www.ubuntu.com/support/plans-and-pricing" target="_blank">&lt;https://www.ubuntu.com/support/plans-and-pricing&gt;</a>.<br>
                    Upguard 2017, <i>IIS vs Apache</i>, Viewed 21 August 2017, <a href="https://www.upguard.com/articles/iis-apache" target="_blank">&lt;https://www.upguard.com/articles/iis-apache&gt;</a>.
                </div>
            </div>
        </main>
        <?php include 'html_includes/footer.inc'; ?>
    </div>
</body>
</html>