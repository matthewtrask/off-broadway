<?php
use \helpers\form;
use \helpers\Url;
?>
<div class="row">
    <div class="small-12 columns">
        <h2>Classes</h2>
        <a href="#" data-reveal-id="newClass"><button class="button whatsnew">Add Class</button></a>
        <button id="removeClasses" class="button remove">Remove Class</button>
        <button id="editClasses" class="button">Edit Class</button>
    </div>
</div><hr>
 <!--data-reveal-id="editClass"-->
<div class="row">
    <div class="small-12 columns">
        <table class="classTable">
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Edit</th>
                    <th>Class Title</th>
                    <th>Teaser</th>
                    <th>Description</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['classes'] as $classes){
                    echo "<tr id='container'>";
                    echo "<td><input type='checkbox' class='remove' name='".$classes->id."' id='".$classes->id."'></td>";
                    echo "<td><input type='checkbox' class='edit' name='".$classes->id."' id='".$classes->id."'></td>";
                    echo "<td>".$classes->class_title."</td>";
                    echo "<td><div class='scrollable'>".$classes->teaser."</div></td>";
                    echo "<td><div class='scrollable'>".$classes->description."</div></td>";
                    echo "<td>".$classes->day."</td>";
                    echo "<td>".$classes->time."</td>";
                    echo "<td>".$classes->price."</td>";
                    echo "<td>".$classes->link."</td>";
                    echo "</tr>";
                } ?>
            </tbody>
        </table>
    </div>
</div>


<div id="newClass" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle" class="text-center">Add New Class</h2>
  <form method="post" action="">
    <div class="row">
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Class Name</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" name="className" placeholder="Class Name">
            </div>
          </div>
        </div>
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Teaser</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" name="teaser" placeholder="Teaser. Just a bit about the class">
            </div>
          </div>
        </div>
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Class Description</label>
            </div>
            <div class="small-9 columns">
              <textarea type="text" id="right-label" rows="6" name="classDesc" placeholder="Class Description"></textarea>
            </div>
          </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Day</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classDay" placeholder="Day for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Time</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classTime" placeholder="Time for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Price</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classPrice" placeholder="Price for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Reg Link</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="regLink" placeholder="Jackrabbit Link for Class">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-offset-3">
                    <button class="button register">Add Class</button>
                </div>
            </div>
        </div>
    </div>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<!-- EDIT CLASS MODULE -->

<div id="editClass" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle" class="text-center">Edit Class</h2>
  <form method="post" action="">
    <div class="row">
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Class Name</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" name="className" placeholder="Class Name" value="">
            </div>
          </div>
        </div>
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Teaser</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" name="teaser" placeholder="Teaser. Just a bit about the class">
            </div>
          </div>
        </div>
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Class Description</label>
            </div>
            <div class="small-9 columns">
              <textarea type="text" id="right-label" rows="6" name="classDesc" placeholder="Class Description"></textarea>
            </div>
          </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Day</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classDay" placeholder="Day for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Time</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classTime" placeholder="Time for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Price</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="classPrice" placeholder="Price for Classes">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Reg Link</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="regLink" placeholder="Jackrabbit Link for Class">
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <div class="row">
                <div class="small-offset-3">
                    <button class="button register">Add Class</button>
                </div>
            </div>
        </div>
    </div>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>





