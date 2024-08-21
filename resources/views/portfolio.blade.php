<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/style-portfolio.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Indra Rusyana | Portfolio</title>
    <style>
        .fixed-div {
            top: 250px;
            left: 200px;
            width: 250px;
            height: auto;
            /* background-color: red; */
        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body id="body" class="container">
    <div class="row">
        <div class="col-6">
            <div class="fixed-top fixed-div">
                <i class="fas fa-code fa-5x py-3"></i>
                <h2>Indra Rusyana</h2>
                <p>Bekasi,Indonesia.</p>
                <a class="a mx-1" style="font-size: 1.3em" href="mailto:indrarusyana@gmai.com"><i
                        class="fas fa-envelope"></i></a>
                <a class="a mx-1" style="font-size: 1.3em" href="www.linkedin.com/in/indra-rusyana-89b8441b2"><i
                        class="fab fa-linkedin"></i></a>
                <a class="a mx-1" style="font-size: 1.3em" href="https://github.com/IndraRusyana"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="col-6 py-5">
            <div class="row">
                <div class="col">
                    <h2>About</h2>
                    <p class="lh-base">
                        I am a Fullstack Developer and Cloud Engineer with extensive experience in both front-end and
                        back-end web development, particularly using PHP and the Laravel Framework. I have completed
                        numerous projects and am well-versed in various web technologies, including Bootstrap,
                        JavaScript, SQL, and Cloud Computing.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>Experience</h2>
                    <div class="experience-item">
                        <h3>Capstone Proyek – [Bangkit MSIB]</h3>
                        <p><em>[Nov/2023] – [Jan/2024]</em></p>
                        <ul>
                            <li>The Capstone project is the final project of the Bangkit program, conducted during the
                                2023 batch 5 period.</li>
                            <li>I Use NodeJS Javascript based for backend service, create REST API to be accessed by
                                other
                                path, determine the characteristics of suitable storage to use, </li>
                            <li>choose cloud storage
                                usage in google cloud platform, also create logging and alerting to monitor applications
                                in cloud storage through the dashboard in google cloud platform.</li>
                        </ul>
                    </div>
                    <div class="experience-item">
                        <h3>Freelance Web Developer</h3>
                        <p><em>[Month/Year] – Present</em></p>
                        <ul>
                            <li>Designed and developed custom websites for various clients, utilizing PHP, JavaScript,
                                and SQL to meet specific business needs.</li>
                            <li>Provided ongoing support and maintenance, optimizing website performance and security.
                            </li>
                            <li>Integrated third-party APIs to extend the functionality of client websites.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>Skills</h2>
                    <ul>
                        <li class="mb-2"><strong>Programming Languages:</strong> PHP, JavaScript, SQL</li>
                        <li class="mb-2"><strong>Frameworks:</strong> Laravel, Bootstrap, NodeJs, React</li>
                        <li class="mb-2"><strong>Cloud Computing:</strong> AWS, Google Cloud Platform</li>
                        <li class="mb-2"><strong>Database Management:</strong> MySQL, MariaDB</li>
                        <li class="mb-2"><strong>Web Development:</strong> HTML, CSS, RESTful APIs</li>
                        <li class="mb-2"><strong>Version Control:</strong> Git, GitHub</li>
                        <li class="mb-2"><strong>DevOps:</strong> Docker, CI/CD pipelines</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>Projects</h2>
                    <div class="project-item">
                        <h3>Website penjualan domba (Sidomba)</h3>
                        <p>A comprehensive Sheep Sales Website that also includes an Investment System for both farms
                            and individual sheep. This platform is designed to allow users to purchase sheep or invest
                            in sheep farming, providing a seamless experience from browsing available sheep to managing
                            investments. The website is built using the Laravel framework, ensuring robust
                            functionality, security, and scalability.</p>
                        <p>
                            Repo : <a class="a mx-1" style="font-size: 1em" href="https://github.com/IndraRusyana"><i
                                    class="fab fa-github"></i></a>
                        </p>
                    </div>
                    <div class="project-item">
                        <h3>Cloud-Based Inventory Management System</h3>
                        <p>Designed and implemented an inventory management system hosted on AWS, enabling real-time
                            tracking and reporting for a small business.</p>
                    </div>
                    <div class="project-item">
                        <h3>Responsive Portfolio Website</h3>
                        <p>Built a personal portfolio website showcasing projects and skills, with a focus on responsive
                            design and user experience.</p>
                    </div>
                    <div class="project-item">
                        <h3>Custom Content Management System (CMS)</h3>
                        <p>Developed a CMS for a client, allowing them to easily manage and update their website content
                            without technical expertise.</p>
                    </div>
                    <div class="project-item">
                        <h3>API Integration for a Weather Forecast Application</h3>
                        <p>Created a weather forecast application that integrates with a third-party API, providing
                            users with real-time weather data and forecasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
