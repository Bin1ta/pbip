  

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.PHP">Website Control</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a  href="help/पाल्पा%20जिल्ला%20Mobile%20Application%20Documentation.pdf" target="_blank">
                           Help <i class="fa fa-question fa-fw"></i>
                        </a>
                      
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php if(!empty($_SESSION['username'])){ echo $_SESSION['username']; } ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="index.php?pg=chg_password.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                   <!-- <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>-->
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-building"> </i> परिचय<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?pg=pages.php&cid=50">स‌क्षिप्त परिचय</a>
                                    </li>
                                    <!--<li>
                                        <a href="index.php?pg=pages.php&cid=51">गाउँपालिकाकाे अपिल</a>
                                    </li>-->
                                      <li>
                                        <a href="index.php?pg=feedback.php">सुझाव व्यवस्थापन</a>
                                    </li>
                                      <!--<li>
                                <a href="index.php?pg=download.php"><i class="fa fa-edit fa-fw"></i> डाउनलाेड</a>
                            </li>-->

                             <li>
                                <a href="index.php?pg=info_update.php"> कार्यालय ठेगाना</a>
                            </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> कर्मचारी विवरण <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?pg=emp_list.php">कर्मचारी</a>
                                    </li>
                                    <li>
                                        <a href="index.php?pg=emp_post.php">पद</a>
                                    </li>
                                  
                                </ul>

                            </li>
                           
                            <li>
                                <a href="#"><i class="fa fa-group fa-fw"></i> कार्यालय अधिकारी<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                
                                    <li>
                                        <a href="index.php?pg=member_list.php&type=1">मुख्य अधिकारी </a>
                                    </li>
                                  
                                    <!--<li>
                                        <a href="table/index.php">पाल्पा स्थित सरकारी कार्यालय</a>
                                    </li>
                                  
                                     <li>
                                        <a href="index.php?pg=pro_report.php">कार्यालयहरूको प्रगति विवरण</a>
                                    </li>-->
                                     <!-- <li>
                                        <a href="index.php?pg=member_list.php&type=1">जनप्रतिनिधि </a>
                                    </li>
                                    <li>
                                        <a href="index.php?pg=member_list.php&type=2">कार्यपालिका</a>
                                    </li>
                                -->
                                  
                                </ul>
                            </li>

                              <li>
                                <a href="#"><i class="fa fa-photo  fa-fw"></i> ग्यालरी<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                     <li>
                                        <a href="index.php?pg=album_reg.php">ऐलिबम</a>
                                    </li>
                                    <li>
                                        <a href="index.php?pg=reg_gallery.php">फाेटाेहरु </a>
                                    </li>
                                      <li>
                                        <a href="index.php?pg=reg_slide.php">बहिरहने फाेटाे (Slide)</a>
                                    </li>
                                </ul>
                            </li>



                             <li>
                                <a href="index.php?pg=citzen_charter.php"><i class="fa fa-copy fa-fw"></i> नागरिक वडापत्र</a>
                            </li>


           
                             <li>
                                <a href="#"><i class="fa fa-industry  fa-fw"></i> सेवा प्रवाह सम्बन्धि विवरण<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                  <li>
                                <a href="index.php?pg=budget_program.php">तथ्याङ्गक सम्बन्धि विवरण</a>
                            </li>
                              <li>
                                <a href="index.php?pg=plan.php">वार्षिक प्रगति विवरण</a>
                            </li>
                            <!--<li>
                                <a href="index.php?pg=income_exp.php">प्रशासनिक विवरण</a>
                            </li>!-->
                                  
                                </ul>
                            </li>



                                  <li>
                                <a href="#"><i class="fa fa-laptop  fa-fw"></i> विद्वयतीय सुशासन<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                <a href="index.php?pg=insident.php">प्रोएक्टिभ सूचना</a>
                            </li>
                              <!--<li>
                                <a href="index.php?pg=soc_security.php">टेलिफोन निर्देशिका</a>
                            </li>-->
                            <li>
                                <a href="index.php?pg=namuna_frm.php">नमुना फारम</a>
                            </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                            <li>
                                <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> सूचना तथा समाचार<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                  <li>
                                <a href="index.php?pg=news.php">समाचार</a>
                            </li> 
                              <li><a href="index.php?pg=bolpatra.php">सूचना</a></li>  
                                <li><a href="index.php?pg=pages.php&cid=48">नारा</a></li>
                                  
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-book fa-fw"></i>मिडिया<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                         
                             <li>
                                <a href="index.php?pg=income_tax.php"> प्रेस विज्ञप्ती</a>
                            </li>


                             <!--<li>
                                <a href="index.php?pg=niti.php"> एेन तथा कानुन</a>
                            </li>-->
                                  
                                </ul>
                            </li>
                         
                         
                            
                                <li>
                                <a href="#"><i class="fa fa-group fa-fw"></i> विविध<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                              
                             <li>
                                <a href="index.php?pg=nirnaya.php"><i class="fa fa-download fa-fw"></i> डाउनलोड</a>
                            </li>
                             <!-- <li>
                                <a href="index.php?pg=pages.php&cid=49"><i class="fa fa-link fa-fw"></i> सम्बन्धित लिंक</a>
                            </li>-->
                            
                           
                                  
                                </ul>
                            </li>
                          
                            
                           

                          
                   </ul>
                    </div>
                </div>
            </nav>