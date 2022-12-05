<?php
                include 'config.php';

            
                $query = "SELECT * FROM tags ORDER BY id ASC";
                $tags = $db->prepare($query);

                $params = array(
                    ":id" => $username,
                    ":email" => $username
                );

                $tags->execute();
                while ($tags){
                    $id = $tags ("id");
                    $title = $tags("title");
                    $desc = $tags("desc");
                    if (strlen($desc)> 20 ){
                        $desc = substr($desc, 0, 20) . "...";
                    }
            ?>
            <div class="row mb-2">
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body p-1">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <p class="card-text"><?php echo $desc; ?></p>
                    </div>
                    </div>
                </div>
            </div>
            <?php } ?>