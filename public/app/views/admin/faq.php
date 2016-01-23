<div class="row">
  <div class="small-12 columns">
      <ul class="breadcrumbs">
          <li><a href="/admin">Admin</a></li>
          <li><a href="#">FAQ</a></li>
      </ul>
    <h2>Admin | FAQ &amp; Answers</h2>
    <hr>
    <table>
      <thead>
        <tr>
          <th>Edit</th>
          <th>Delete</th>
          <th>Question</th>
          <th>Answer</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
      <?php
      foreach($data['faq'] as $faq){
        echo "<tr id='container'>";
        echo "<td><button name='".$faq->id."' for='".$faq->id."' id='".$faq->id."' class='button remove faq'>Remove FAQ</button></td>";
        echo "<td><a href='#' data-reveal-id='faq".$faq->id."'><button name='".$faq->question."' id='".$faq->id."' class='button'>Edit FAQ</button></a></td>";
        echo "<td>".$faq->question."</td>";
        echo "<td>".$faq->answer."</td>";
        echo "</tr>";
      } ?>
      </tbody>
    </table>
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

<!-- EDIT CLASS MODULE -->
<?php
foreach($data['faq'] as $faq) {
  echo "<div id='faq".$faq->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
    echo "<h2 id='modalTitle' class='text-center'>Edit Faq</h2>";
    echo "<form method='POST' action='' id='editFaq'>";
      echo "<input for='editQuestion' name='editQuestion' value='".$faq->question."'>";
      echo "<textarea for='editAnswer' rows='5' name='editAnswer' placeholder='".$faq->answer."'></textarea>";
      echo "<input for='editId' name='editId' value='".$faq->id."'>";
      echo "<button class='button register' id='editFaq'>Submit</button>";
    echo "</form>";
    echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
  echo "</div>";
}

?>