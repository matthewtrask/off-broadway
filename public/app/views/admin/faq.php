<div class="row">
  <div class="small-12 columns">
    <h2>Admin | FAQ &amp; Answers</h2>
    <table>
      <thead>
        <tr>
          <th>Edit</th>
          <th>Delete</th>
          <th>Question</th>
          <th>Answer</th>
        </tr>
      </thead>
      <?php
        foreach($data['faq'] as $faq){
          echo "<tbody>";
            echo "<tr>";
              echo "<td><button class='button register remove' name='".$faq->id."' id='faq".$faq->id."'>Delete</button></td>";
              echo "<td><a href='#' data-reveal-id='faq".$faq->id."'><button class='button' id='faq\".$faq->id.\"'>Edit</button></a></td>";
              echo "<td>".$faq->question."</td>";
              echo "<td>".$faq->answer."</td>";
            echo "</tr>";
          echo "</tbody>";
        }
      ?>
    </table>
    <?php
    foreach($data['faq'] as $faq){
      echo "<div id='faq".$faq->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
        echo "<p class='lead'>Use this form to edit the questions and answers on the FAQ page</p>";
        echo "<p>If you need to add a new question, there is a form at the bottom of the page</p>";
        echo "<form method='post' action='' id='adminFaq'>";
          echo "<label><h2>Question</h2></label>";
          echo "<input name='editQuestion' for='editQuestion' placeholder='".$faq->question."'>";
          echo "<label><h2>Answer</h2></label>";
          echo "<textarea name='editAnswer' for='editAnswer' placeholder='".$faq->answer."'></textarea>";
          echo "<button for='submit' id='adminFaqSubmit' value='submit' class='button'>Submit</button>";
        echo "</form>";
      echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
      echo "</div>";
    }
    ?>
    <hr>
    <h2>Add New Question &amp; Answer</h2>
    <form method="post" action="" id="newFaq">
      <label>Question</label>
      <input for="faqQuestion" name="faqQuestion" placeholder="Question">
      <label>Answer</label>
      <textarea for="faqAnswer" rows="5" name="faqAnswer" placeholder="Answer"></textarea>
      <button class="button register" id="faqSubmit">Submit</button>
    </form>
  </div>
</div>
