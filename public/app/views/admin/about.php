<?php

?>
<div class="row" style="margin-top: 2%">
    <div class="small-12 columns">
        <h2>About Us | Admin</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Updated By</th>
                    <th>Update Date</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data['about'] as $about){
                echo "<tr>";
                echo "<td>".$about->title."</td>";
                echo "<td>".$about->content."</td>";
                echo "<td>".$about->updatedBy."</td>";
                echo "<td>".$about->updateDate."</td>";
                echo "</tr>";
            }?>
            </tbody>
        </table>
    </div>
    <div class="small-6 columns">
        <form method="post" action="">

        </form>
    </div>
</div>
