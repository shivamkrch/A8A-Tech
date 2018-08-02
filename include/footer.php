
        <style>
            #top:hover,:focus{color: #044EC1}
            .flw:hover,.flw:focus,a.sml:hover,.sml:focus{
                transform: scale(1.1);-webkit-transform: scale(1.1);-ms-transform: scale(1.1)
            }
            a.sml{color: black;text-decoration: none}
            .link1:hover,.link1:focus,a.sml:hover.a.sml:focus{text-decoration: none;}
        </style>
    <?=$fbjssdk ?>
        <div class="container-fluid mb-0" style="background: #E1DEDD;margin-top: 20px;color: whitesmoke">
            <div style="height: 100px" class="container-fluid">     <center>
                <p id="gtop" style="visibility: hidden" class="mt-2">Go to Top</p>
                <a href="#banner" title="Go to Top (T)" id="toTop" class="" style="color: #3474D8">
                    <span class="fa fa-chevron-up" style="font-size: 30px;" id="top"></span></a></center></div>
                    <div class="row ml-auto" style="width: 100% ">
                        <div class="col-md mb-5 mx-auto" style="color: black;letter-spacing: 1px;font-family: Consolas;font-size: 17px">
                            <h3 class="ml-4 display-5 slideanim">Menu</h3>
                            <ul style="list-style-type: none;">
                                <li class=" slideanim"><a href="index.php" class="link1" title="Home (H)">Home</a></li>
                                <li class="slideanim"><a href="mobiles.php" class="link1" title="Mobiles (M)">Mobiles</a></li>
                                <li class="slideanim"><a href="pcs.php" class="link1 " title="PCs (P)">PCs</a></li>
                                <li class="slideanim"><a href="socialmedia.php" class="link1 " title="Social Media (S)">Social Media</a></li>
                                <li class="slideanim"><a href="others.php" class="link1 " title="Others (O)">Others</a></li>
                                <li class="slideanim"><a href="aboutus.php" class="link1 " title="About Us (A)">About Us</a></li>
                            </ul>
                        </div>
                        
                        <div class=" col-md mb-5 mx-auto">
                            <h3 class="ml-2 display-5 slideanim" style="font-family: Consolas;color: black">Forum :</h3>
                            <form>
                        <div class="form-group">
                            <textarea class="form-control x slideanim" rows="4" cols="40" id="feedback" placeholder="Ask your questions, Send us your suggestions..."></textarea>
                            <a href="mailto:a8atech.in@gmail.com?Subject=Feedback" class="btn btn-light btn-outline-primary mt-2 float-right x slideanim" style="letter-spacing:2px;" >SEND</a>
                        </div></form></div>
                        
                        <div class="col-md mb-5 mx-auto" style="color: black;letter-spacing: 1px;font-family: Consolas;font-size: 17px">
                            <h3 class="ml-4 display-5 slideanim">Follow Us </h3>
                            <ul style=" list-style: none">   
                                <li class="mb-1 slideanim"><a href="https://fb.com/a8atech" class="sml">
                            <span class="fa fa-facebook-square flw" style="font-size: 40px;color: blue"></span>/A8ATech</a>
                                            <?=$fblikebtn ?></li>
                            <li class="mb-1 slideanim"> <a href="https://www.instagram.com/a8atech/" class="sml" target="_blank">
                                        <span class="fa fa-instagram flw" style="font-size: 40px;color:  #bc2a8d"></span>/A8ATech</a></li>
                                        <li class="mb-1 slideanim"> <a href="https://twitter.com/A8A_Tech" class="sml" target="_blank">
                                                <span class="fa fa-twitter-square flw" style="font-size: 40px;color: #1DA1F2"></span>/A8A_Tech</a>
                                                    <?=$twitterfollowbtn ?>  </li>                     
                            </ul>
                        </div>
                    </div>
        </div>

