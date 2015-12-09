<div class="row">
  <div class="small-12 columns">
    <h2>OBCT Pages</h2>
    <p>You can add, remove, return to production, or archive pages here</p>
  </div>
</div>
<div class="row">
  <div class="small-6 columns">
    <table>
      <thead>
        <tr>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="This is the value being passed to the core to create a clean URL">URL</th>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="This is the value being passed for buttons and dropdowns">Value</th>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="Value just to remind everyone what the page is for. Also used for screen readers or other tools">Description</th>
        </tr>
      </thead>
    <?php foreach($data['url'] as $url){
      echo "<tbody>";
        echo "<tr>";
          echo "<td>".$url->url."</td>";
          echo "<td>".$url->value."</td>";
          echo "<td>".$url->description."</td>";
        echo "</tr>";
      echo "</tbody>";
    } ?>
  </table>
  </div>
  <div class="small-6 columns">
    <h2>Add New URL</h2>
    <form method="post" action="" id="urlForm">
      <div class="large-12 columns">
      <label>URL
        <input type="text" for="url" name="url" placeholder="clean url" />
      </label>
      <label>Value
        <input type="text" for="value" name="value" placeholder="clean url value" />
      </label>
      <label>Description
        <input type="text" for="description" name="description" placeholder="url page description" />
      </label>
      <button class="button" for="submit" id="urlSubmit">Submit</button>
    </div>
    <form>
  </div>
</div>
<div class="row">
  <div class="small-12 columns">
    <table>
      <thead>
        <tr>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="This is the value being passed to the core to create a clean URL">URL</th>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="This is the value being passed for buttons and dropdowns">Value</th>
          <th><span data-tooltip aria-haspopup="true" class="has-tip" title="Value just to remind everyone what the page is for. Also used for screen readers or other tools">Description</th>
          <th>Remove</th>
          <th>Archive</th>
          <th>Turn On</th>
        </tr>
      </thead>
    <?php foreach($data['url'] as $url){
      echo "<tbody>";
        echo "<tr>";
          echo "<td>".$url->url."</td>";
          echo "<td>".$url->value."</td>";
          echo "<td>".$url->description."</td>";
          echo "<td id='url".$url->id."' class='button register'>Remove</td>";
          echo "<td id='".$url->id."' class='button whatsnew'>Archive</td>";
          // echo "<td id=".$url->id." class='button remove'>Remove</td>";
        echo "</tr>";
      echo "</tbody>";
    } ?>
  </table>
  </div>
</div>
