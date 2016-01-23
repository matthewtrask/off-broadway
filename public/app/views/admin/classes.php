<?php
use \helpers\form;
use \helpers\Url;
?>
<div class="row">
    <div class="small-12 columns">
        <ul class="breadcrumbs">
            <li><a href="admin">Admin</a></li>
            <li>Classes</li>
        </ul>
        <h2>Classes</h2>
        <p>Add, edit, or remove classes here</p>
        <a href="#" data-reveal-id="newClass"><button id="addClassBtn" class="button whatsnew">Add Class</button></a>
    </div>
</div><hr>
 <!--data-reveal-id="editClass"-->
<div class="row">
    <div class="small-12 columns">
        <form method='post' action=''>
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
                        echo "<td><button name='".$classes->id."' for='".$classes->id."' id='".$classes->id."' class='button remove'>Remove Class</button></td>";
                        echo "<td><a href='#' data-reveal-id='class".$classes->id."'><button name='".$classes->class_title."' id='".$classes->id."' class='button'>Edit Class</button></a></td>";
                        echo "<td>".$classes->class_title."</td>";
                        echo "<td><div class='scrollable'>".$classes->teaser."</div></td>";
                        echo "<td><div class='scrollable'>".$classes->description."</div></td>";
                        echo "<td>".$classes->day."</td>";
                        echo "<td>".$classes->time."</td>";
                        echo "<td>".$classes->price."</td>";
                        echo "<td><div class='scrollable'>".$classes->link."</div></td>";
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </form>
    </div>
</div>


<div id="newClass" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle" class="text-center">Add New Class</h2>
  <form method="POST" action="" id="addClassForm">
    <div class="row">
        <div class="small-12 columns">
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Class Name</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" for="className" name="className" placeholder="Class Name">
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
                    <button id='addClass' class="button register">Add Class</button>
                </div>
            </div>
        </div>
    </div>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<!-- EDIT CLASS MODULE -->
<?php
foreach($data['classes'] as $classes) {
    echo "<div id='class".$classes->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
        echo "<h2 id='modalTitle' class='text-center'>Edit Class</h2>";
            echo "<form method='POST' action='' id='editClassForm'>";
                echo "<div class='row'>";
                    echo "<div class='small-12 columns hide-for-medium-up'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Id</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassId' value='".$classes->id."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Name</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassName' value='".$classes->class_title."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Teaser</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateTeaser' value='".$classes->teaser."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Description</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<textarea type='text' id='right-label' rows='6'  name='updateClassDescription'>".$classes->description."</textarea>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Day</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassDay' value='".$classes->day."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Time</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassTime' value='".$classes->time."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Class Price</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassPrice' value='".$classes->price."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-3 columns'>";
                                echo "<label for='right-label' class='right inline'>Sign Up Link</label>";
                            echo "</div>";
                            echo "<div class='small-9 columns'>";
                                echo "<input type='text' id='right-label' name='updateClassLink' value='".$classes->link."'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='small-12 columns'>";
                        echo "<div class='row'>";
                            echo "<div class='small-offset-3'>";
                                echo "<button id='editClass' class='button register'>Edit Class</button>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</form>";
            echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
    echo "</div>";
}

?>



<div id='data' class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
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
