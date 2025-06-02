<?php
$getId = $_GET['idMessage'];
$selectMessage = mysqli_query($config, "SELECT * FROM contacts WHERE contact_id = $getId");
$rowMessage = mysqli_fetch_assoc($selectMessage);
if (isset($_POST['replying'])) {
    $contactSubject = $_POST['contact_subject'];
    $contactMessage = $_POST['contact_message'];
    $contactEmail = $rowMessage['contact_email'];

    $headers = "From: williamsetiady@gmail.com\r\n" . "Reply-To: williamsetiady@gmail.com\r\n" . "Content-Type: text/plain; charset=UTF-8\r\n" . "MIME-Version: 1.0\r\n";
    if (mail($contactEmail, $contactSubject, $contactMessage, $headers)) {
        header("location:?page=reply");
    }
}
?>
<div class="m-2">
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label" for="">Name</label>
        </div>
        <div class="col-sm-10">
            <label for="" class="form-label">: <?= $rowMessage['contact_name'] ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label" for="">Email</label>
        </div>
        <div class="col-sm-10">
            <label for="" class="form-label">: <?= $rowMessage['contact_email'] ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label" for="">Subject</label>
        </div>
        <div class="col-sm-10">
            <label for="" class="form-label">: <?= $rowMessage['contact_subject'] ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label" for="">Message</label>
        </div>
        <div class="col-sm-10">
            <label for="" class="form-label">: <?= $rowMessage['contact_message'] ?></label>
        </div>
    </div>
</div>
<form action="" method="post">
    <div class="form mt-4">
        <div class="row mt-3">
            <div class="col-sm-2">
                <label class="form-label" for="">Subject</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="contact_subject">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <label class="form-label" for="">Message</label>
            </div>
            <div class="col-sm-10">
                <textarea id="summernote" type="text" class="form-control" name="contact_message"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary mt-2" name="replying">Send Reply</button>
            </div>
        </div>
    </div>
</form>