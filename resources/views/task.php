<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskMinder</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header>
      <div class="info-container">
        <h1>⟁ TaskMinder Board</h1>
        <!-- <p>
          A place to organise tasks to completion as well as add new ones and
          delete old ones.
        </p> -->
      </div>
      <form class="input-container">
        <div class="fields">
          <input id="title" placeholder="title..." />
          <input id="description" placeholder="description..." />
        </div>
        <input type="submit" id="submit-button" />
      </form>
    </header>

    <section class="column-container">
      <aside>
        <ul>
          <ol class="btn">Dashboard</ol>
          <ol class="btn">Projects</ol>
          <ol class="btn active">Tasks</ol>
          <ol class="btn">Calender</ol>
        </ul>
      </aside>
      <div class="task-column" id="backlog">
        <h3>✔ To do</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>

      <div class="task-column" id="doing">
        <h3>✔ In Progress</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>

      <div class="task-column" id="done">
        <h3>✔ Done</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>
    </section>

    <div class="error-container"></div>

    <script src="js/app.js"></script>
  </body>
</html>
