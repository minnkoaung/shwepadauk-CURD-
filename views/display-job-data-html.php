<?php 
        $dispalyTableData = "<div class='row'>
                                <div class='table-responsive display_table'>
                                    <table class='table table-bordered table-hover' >
                                        <thead>
                                            <tr class='success'>
                                                <!-- <th style='text-align:center;'>Sr.No</th> -->
                                                <th style='text-align:center;'>File Name</th>
                                                <th style='text-align:center;'>File Url</th>
                                                <th style='text-align:center;'>Detail View</th>
                                                <th style='text-align:center;'>Edit</th>
                                                <th style='text-align:center;'>Delete</th>                            
                                            </tr>
                                        </thead>
                                        <tbody style='text-align:center;'>";
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td>".$row['name']."</td>";
            $dispalyTableData .= "<td>".$row['file_url']."</td>";
            $dispalyTableData .= "<td><a href='#' class='btn btn-success'>Click To View</a></td>";
            $dispalyTableData .= "<td><a href='index.php?page=edit_job_data&amp;id=".$row['id']."' class='btn btn-warning'>Click To Edit</a></td>";
            $dispalyTableData .= "<td><a href='index.php?page=delete_job_data&amp;id=".$row['id']."' class='btn btn-danger deleteJobData'>Click To Delete</a></td>";
            $dispalyTableData .= "</tr>";
        }
        $dispalyTableData .= " </tbody></table></div></div>";
        return $dispalyTableData;      
?>