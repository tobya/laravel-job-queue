<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <h1>Laravel Job/Queue Example By Ajaz</h1>
        <form action="/send-email" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                        <div class="md-form mb-0">

                      <label for="to">To:</label>
                      <input type="email" name="to" id="to" required class="form-control">
                  </div>  
                </div>
                <div class="col-sm-12">
                        <div class="md-form mb-0">

                      <label for="subject">Subject:</label>
                      <input type="text" name="subject" id="subject" required class="form-control">
                  </div>  
                </div>
                <div class="col-sm-12">
                        <div class="md-form mb-0">

                      <label for="message">Message:</label>
                      <textarea name="message" id="message" required class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                        <div class="md-form mb-0" style="margin-top: 5px">
                        <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
