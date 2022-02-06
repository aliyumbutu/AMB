
 <?php   
    require_once("loginTitleBar.php");

    ?>
<?php require_once("conn2.php") ?>

<br/>

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">

                               
                                 <div class="image-container">

                                    <img src="images/profile.jpg" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                   
                                    <div class="middle">


                                        <br/>
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />

                                    </div>


                                </div>



                                <?php



    $id = $_GET['id'];
    $row = mysqli_query($conn,"SELECT * FROM mentors WHERE id = $id") or die("cannot update" . mysqli_error($conn)); 

    $fetch = mysqli_fetch_array($row);

            $id = $fetch["id"];
            $full_name = $fetch["full_name"];
            $skill = $fetch["skill"];
            $description = $fetch["description"];
            $email = $fetch["email"];
            $dob = $fetch["dob"];
            $gender = $fetch["gender"];
            $country = $fetch["country"];
            $address = $fetch["address"];
            $e_duration = $fetch["e_duration"];
            $phone = $fetch["phone"];
        

            


                                  ?>



                          
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $full_name; ?></a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)">Skills</a> <?php echo $skill; ?></h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">300</a> Total Student Followers</h6>
                                    
                                    <h6 class="d-block"><a href="javascript:void(0)">Description</a>:</h6>
                                    <b><?php echo $description; ?>
                                      </b>
                                      <hr/>
                                    <button class="btn btn-primary">Ask a Question</button>
                                          <button class="btn btn-primary">Live Chat</button>
                                             <button class="btn btn-primary">Groups</button>
                                  
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="Chatmentor" value="Chat With the Mentor" />
                                </div>
                            </div>
                        </div>

                        <br/>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $full_name; ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $dob; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $gender; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Mail</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $email; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Country</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $country; ?>
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $address; ?>                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $phone; ?>
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Duration Expirience</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $e_duration; ?>
                                            </div>
                                        </div>
                                        <hr />





                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


  