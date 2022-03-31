<!DOCTYPE html>
<html lang="fr">
<?php $title="Création article"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container">
        <h1>Création article</h1>

        <form
            action=""
            method="POST"
            enctype="multipart/form-data"
            >
            
            <div class="form-group">
                <label>
                    Title
                    <input
                        class="form-control"
                        type="text"
                        name="title"
                        placeholder="Title"
                        maxlength="50"
                        value="<?= isset($article) ? $_POST['title'] : '' ?>" />
                </label>
                <?php if (isset($validations) && isset($validations['title'])): ?>
                    <p><?= $validations['title'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Content
                    <textarea
                        class="form-control"
                        name="content"
                        maxlength="1000"><?= isset($article) ? $_POST['content'] : '' ?></textarea>
                </label>
                <?php if (isset($validations) && isset($validations['content'])): ?>
                    <p><?= $validations['content'] ?></p>
                <?php endif; ?>
            </div>

            <input type="submit" value="Save" class="btn btn-primary" />

        </form>
    </div>

    <?php require "../footer.php"; ?>
</body>
</html>
