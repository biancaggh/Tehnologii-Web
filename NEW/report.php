<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="report_styles.css" rel="stylesheet">
    <title>Report</title>
</head>

<body prefix="schema: http://schema.org">
    <header>
        <h1>Report: Terrorism Web Visualizer (TeW)</h1>
    </header>
    <div role="contentinfo">
        <ol role="directory">
            <li>
                <a href="#abstract">
                    <span>1.</span> Abstract
                </a>
            </li>

            <li>
                <a href="#introduction">
                    <span>2.</span> Introduction
                </a>
            </li>

            <li>
                <a href="#mainrequirements">
                    <span>3.</span> Main Requirements
                </a>
                <ol>
                    <li>
                        <a href="#features">
                            <span>3.1.</span> Features
                        </a>
                    </li>

                    <li>
                        <a href="#interaction">
                            <span>3.2.</span> User Interaction
                        </a>
                    </li>
                </ol>
            </li>

            <li>
                <a href="#duties">
                    <span>4.</span>Team Members' Duties
                </a>
            </li>

            <li>
                <a href="#references">
                    <span>5.</span>References
                </a>
            </li>
        </ol>
        <dl>
            <dt>Authors:</dt>
            <dd>Begu Maria-Florina (2E2)</dd>
            <dd>Darie Camelia-Beatrice (2E2)</dd>
            <dd>Gheorghitanu Bianca-Gabriela (2E2)</dd>
        </dl>
    </div>
    <section id="abstract" typeof="sa:Abstract" role="doc-abstract">
        <h2>
            <span>1.</span> Abstract
        </h2>
        <p>
            Terrorism Web Visualizer is a tool for flexible visualization of data on global terrorism. The statistics and visualizations generated are represented in 3 ways: chart, map and table, each one of them having information about the gravity, year, numbers
            for different regions. The data provided can be saved in different formats: CSV, WebP and SVG.
        </p>
    </section>

    <section id="introduction" typeof="sa:Introduction" role="doc-introduction">
        <h2>
            <span>2.</span> Introduction
        </h2>
        <p>
            In our overview of terrorism, we try to understand how the number of terrorist acts varies around the world and how it has changed over time. To do this, we need a clear and consistent definition of what terrorism is and how it is different from any other
            form of violence.
            <cite><a href="https://ourworldindata.org/terrorism">[1]</a></cite>
        </p>
        <p>
            Terrorism is defined in the Oxford Dictionary as <q>the unlawful use of violence and intimidation, especially against civilians, in the pursuit of political aims.</q> We quickly see that this definition is unspecific and subjective. The issue
            of subjectivity in this case means that there is no internationally recognised legal definition of terrorism. Despite considerable discussion, the formation of a comprehensive convention against international terrorism by the United Nations
            has always been impeded by the lack of consensus on a definition.
            <cite><a href="https://ourworldindata.org/terrorism">[1]</a></cite>
        </p>
        <p>
            The key problem is that terrorism is difficult to distinguish from other forms of political violence and violent crime, such as state-based armed conflict, non-state conflict, one-sided violence, hate crime, and homicide. The lines between these different
            forms of violence are often blurry.
            <cite><a href="https://ourworldindata.org/terrorism">[1]</a></cite>
        </p>
        <p>
            Here, we take a look at standard criteria of what constitutes terrorism, collect the data on this subject and display it in different formats. This way a web tool for flexible visualization of data on global terrorism is created, with different ways to
            display data and to export the information.
        </p>
        <p>
            In the following sections are presented the requirements of the application, the features, teh way our users interact with it and the responsabilities of each member of the team.
        </p>
    </section>

    <section id="mainrequirements">
        <h2>
            <span>3.</span> Main Requirements
        </h2>
        <p>
            Create a Web tool for flexible visualization of global terrorism data based on its own REST / GraphQL API. The statistics and visualizations generated - minimum 3 modes + cartographic renderings, by regions, decades and gravity, using profile Web services
            - can be exported in CSV, WebP and SVG formats. The system will also provide support for multi-criteria search for reported incidents, including additional details on weapons used - external data sources will be used.
            <cite><a href="https://profs.info.uaic.ro/~andrei.panu/webprojects.html">[2]</a></cite>
        </p>
    </section>

    <section id="features">
        <h3>
            <span>3.1.</span> Features
        </h3>
        <ol>
            <li><span class="features">Authentification</span> - the user connects by tipping in his username and password. The information will be verified and if the user is in our database. If they are, they will be redirected on the Welcome Page . In
                the other case, they will remain on the Welcome Page.</li>
            <li><span class="features">Registration</span> - the user creates an account by entering : their first and last name, e-mail, username and password. The account will be saved in our database. </li>
            <li><span class="features">Search</span>- the option will provide multi-criteria search for reported incidents, including additional details on weapons used. </li>
            <li><span class="features">View</span> - the statistics, information about weapons and different articles about the worst attacks can be observed by the user.</li>
            <li><span class="features">Download</span> - the statistics can be saved by the user, in different formats: CSV, WebP and SVG.</li>
        </ol>
    </section>

    <section id="interaction">
        <h3>
            <span>3.2.</span> User Interaction
        </h3>
        <ol>
            <li>When the user first enters the site, they will be redirected on the <span class="pages">Landing Page</span>.</li>
            <li>After that, the user can choose between the <span class="pages">Login</span> option (if they already have an account) or the
                <span class="pages">SignUp</span> option (if they want to register). According to their choice, they will be taken on the specific page. </li>
            <li>Once they are logged in, they will be on the <span class="pages">Welcome Page</span>, where they will have a <span class="pages">Menu</span> with different option:
                <ul>
                    <li><span class="pages">Home</span></li>
                    <li><span class="pages">Weapons</span></li>
                    <li><span class="pages">Statistics</span></li>
                    <li><span class="pages">Worst Attacks</span></li>
                    <li><span class="pages">User</span></li>
                    <li><span class="pages">Admin</span></li>
                    <li><span class="pages">Report</span></li>
                    <li><span class="pages">About Us</span></li>
                    <li><span class="pages">Search</span></li>
                </ul>
            </li>
            <li>On the <span class="pages">Weapons Page</span>, the user can learn general information about weapons and select a specific type and they will be redirected on that page. The user has the posibility to find new information about weapons by searching a specific word. The result will contain the names of the weapons that are fit to the description. Each page has its own search and it will show the result only from the table the weapon is stocked in.</li>
            <li>
                On the <span class="pages">Statistics Page</span>, the user can visualize data in different ways: chart, map, table and save the data in different formats: CSV, WebP and SVG.
            </li>
            <li>
                On the <span class="pages">Profile Page</span>, the user can see his personal information, logout and delete account. The data showed in this page comes from the connection to the website through the Register Page.
            </li>
            <li>
                On the <span class="pages">Report Page</span>, the user can see information related to the site.
            </li>
            <li>
                On the <span class="pages">About Us Page</span>, the user can see information regarding the team members.
            </li>
            <li>
                If the user choose the <span class="pages">Search</span> option, they can look up information that they are interested in.
            </li>
        </ol>
    </section>

    <section id="duties">
        <h2>
            <span>4.</span> Team Members' Duties
        </h2>
        <ul>
            <li><span class="member">Begu Maria-Florina</span>:<br>Design: Home, Menu, Statistics, Report, Team </li>
            <li><span class="member">Darie Camelia-Beatrice</span>:<br>Design: Worst Attacks, About Us, Report </li>
            <li><span class="member">Gheorghitanu Bianca-Gabriela</span>:<br>Design: Landing, Log In, Sign In, Menu, Weapons Pages, Profile, Admin, Team<br> Back-End: Log In + Sign In, Creating the database and showing its elements into the Weapons Pages, Profile function: delete account & logout, Multi criterial search based on a specific term, Creating the Admin mode with lets us to add a new weapon/ a new attack. </li>
        </ul>
    </section>

    <section id="references">
        <h2>
            <span>5.</span> References
        </h2>
        <p>
            <a href="https://ourworldindata.org/terrorism">[1] Our World In Data, Terrorism</a>
            <p>
                <p>
                    <a href="https://profs.info.uaic.ro/~andrei.panu/webprojects.html">[2] Dr. Andrei Panu, Web Technologies, Project Proposals, TeW</a>
                </p>
    </section>
</body>

</html>