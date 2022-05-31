<!DOCTYPE html>
<html>

<title>Create Article</title>


  <body>
  <?php include('../sdg/header.php');?>
  <?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
    <main>
      <form action="../sdg/createArticle_script.php" method="post">


        <div style="text-align: center">
          <h1>Create Article</h1>


          <hr>
          <p><label for="Title"><b>Nazov</b></label>
            <br><input type="text" name="Title" id="Title" required>
          <p><label for="Autor"><b>Autor</b></label>
            <br><input type="text" name="Autor" id="Autor" required>
          <p><label for="Text"><b>Text</b></label>
            <br><textarea style="width: 1000px" rows="20" name="Text" id="Text"></textarea>
          <p><button type="submit" class="btn btn-secondary">PRIDAJ</button>

          <p class="text-danger"><?php echo $message ?></p>
        </div>

      </form>
    </main>
  </body>
</html>