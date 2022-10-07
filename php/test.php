<?php
                        $sql = "SELECT * FROM post_test";
                        $result = $conn->query($sql);
                        
                        $row_count = 1;
                        if ($result->num_rows > 0){
                            while ($row = $result-> fetch_assoc()){
                                echo $row_count;
                                $row_count++;
                               
                              }
                        }

                        else{
                            echo "no results";
                        }
                        $conn->close();

                    ?>



<div class="s_element">
                    <div class="s_image">
                        <img src="php/images/165974370869ad6af993b235e18147fd1b20f83211.webp"/>

                    </div>
                    <div class="s_info">
                        <div class="post_title">
                            <h4>Post Title</h4>
                        </div>
                        <div class="views_left">
                            <h6>Views Left:<span>54</span> </h6>
                        </div>

                    </div>
                </div>