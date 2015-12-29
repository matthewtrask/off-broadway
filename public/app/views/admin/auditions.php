<?php

?>
<div class="row">
    <div class="small-12 columns">
        <ul class="breadcrumbs">
            <li><a href="/admin">Admin</a></li>
            <li><a href="#">Auditions</a></li>
        </ul>
        <h2>Admin | Auditions</h2>
        <table>
            <thead>
                <tr>
                    <th>Show Title</th>
                    <th>Show Teaser</th>
                    <th>Show Dates</th>
                    <th>Show Image</th>
                    <th>Audition Dates</th>
                </tr>
            </thead>
        </table>
    </div><hr>
</div>

<div class="row">
    <div class="small-12 columns">
        <form method="POST" action="" enctype="multipart/form-data" id="auditionsForm">
            <label>Show Title</label>
            <input for="showTitle" name="showTitle">
            <label>Show Teaser</label>
            <textarea rows="3" for="showTeaser" name="showTeaser"></textarea>
            <label>Show Dates</label>
            <input for="showDates" name="showDates">
            <label>Audition Dates</label>
            <input for="auditionDates" name="auditionDates">
            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Select Show Image
            </label>
            <input id="file-upload" name="auditionImage" for="auditionImage" type="file"/><br><br>
            <button class="button whatsnew" id="submitAudition">Submit</button>
        </form>
    </div>
</div>
