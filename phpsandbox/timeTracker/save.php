<?php if (!isset($_POST['submit'])): ?>
  <form method="post"
    <?php action="<?php echo $data['router']‑>pathFor('entries‑save'); ?>">
    <div class="form‑group">
      <label for="pid">Project</label>
      <select class="form‑control" id="pid" name="pid">
      <?php foreach ($data['projects'] as $project): ?>
        <option value="<?php echo htmlspecialchars($project['id'], ENT_COMPAT, 'UTF‑8'); ?>">
          <?php echo htmlspecialchars($project['name'], ENT_COMPAT, 'UTF‑8'); ?>
        </option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form‑group">
      <label for="date">Date</label>
      <input type="date" class="form‑control" id="date" name="date">
    </div>
    <div class="form‑group">
      <label for="hours">Hours spent</label>
      <input type="text" class="form‑control" id="hours" name="hours">
    </div>
    <div class="form‑group">
      <label for="comment">Comment</label>
      <input type="text" class="form‑control" id="comment" name="comment">
    </div>
    <div class="form‑group">
      <button type="submit" name="submit" class="btn btn‑success">Save</button>
    </div>
  </form>
<?php else: ?>
  <div class="alert alert‑success" role="alert">
    <strong>Success!</strong> The time entry was successfully created or updated.
  </div>
<?php endif; ?>
