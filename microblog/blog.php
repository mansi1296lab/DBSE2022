<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome Link-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!---Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/BlogPageStyle.css">
    <title>Blog Page</title>
</head>

<body>

<div class="box-area">

    <header>
        <div class="logo">
            <h1 class="logo-text"><span>Team 02 </span> Blog</h1>
        </div>
        <nav>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><b><a href="index.php">Home</a></b></li>
            <li><b><a href="blog.php">Postings</a></b></li>
            <li><b><a href="comments.php">Comments</a></b></li>
        </ul>
        </nav>
        <a class="cta" href="profile.php"><button>Profiles</button></a>
    </header>

    <div class="logo">
           <br><h1>ALL BLOG POSTS</h1>

        </div>



    <!-- Content -->
    <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="recent-post-title">Recent Posts</h1>

            <div class="post clearfix">
                <img src="assets/images/Micro.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.hmtl">Using digital technology to promote higher education learning</a></h2>
                    <i class="far fa-user"> Christina Wekerle</i>
                    &nbsp;
                    <i class="far fa-calendar"> jul 16, 2021</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="post clearfix">
                <img src="assets/images/Micro.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.hmtl">Incorporating microblogging (‘‘tweeting’’) in higher education</a></h2>
                    <i class="far fa-user"> Thomas Menkhoff</i>
                    &nbsp;
                    <i class="far fa-calendar"> oct 15, 2015</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/Micro.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.hmtl">The educational affordances of blogs for self-directed learning</a></h2>
                    <i class="far fa-user"> Juby Robertson</i>
                    &nbsp;
                    <i class="far fa-calendar"> Sep 2, 2011</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/Micro.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.hmtl">The Role of Microblogging Capacities in Knowledge Sharing and
                            Collaboration in Virtual Teams</a></h2>
                    <i class="far fa-user"> Simon Cleveland</i>
                    &nbsp;
                    <i class="far fa-calendar"> Mar 11, 2015</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

        </div>
        <!-- // Main Content -->

        <div class="sidebar">

            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search Keywords">
                </form>
            </div>


            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="#">Digital Technology</a></li>
                    <li><a href="#">Higher Education</a></li>
                    <li><a href="#">Collaboration</a></li>
                    <li><a href="#">Classroom</a></li>
                    <li><a href="#">Mobile Learning</a></li>
                    <li><a href="#">Public opinion</a></li>
                    <li><a href="#">Life Lessons</a></li>
                </ul>
            </div>
            <div class="rectangle">
                <div>
                    <h3 class="myblog">User Blog</h3>
                    <ul>
                        <li><a href="#">  Create New Post  </a></li>
                    </ul>
                    <h4 class="manage">My Posts(x)</h4>
                    <ul>
                        <li><a href="#">View Posts</a></li>
                        <li><a href="#">Edit Posts</a></li>
                        <li><a href="#">Delete Posts</a></li>
                    </ul>

                </div>



            </div>
        </div>
    </div>
    <!-- // Content -->


</body>

</html>