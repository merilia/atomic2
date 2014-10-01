<?
if (isset($_POST['data'])) {
    mysql_connect('localhost', 'root', '') or exit(mysql_error());
    mysql_select_db('atomic2') or exit(mysql_error());
    foreach ($_POST['data'] as $field => $value) {
        $data[$field] = mysql_real_escape_string($value);
    }
    extract($data);
    $sql = "INSERT INTO feedback
                 SET
                    feedback_first_name='$feedback_first_name',
                    feedback_last_name='$feedback_last_name',
                    feedback_email='$feedback_email',
                    feedback_phone='$feedback_phone',
                    feedback_text='$feedback_text'";
    echo "<pre>$sql</pre>";
    mysql_query($sql) or exit(mysql_error());
    mail('meriliasu@gmail.com','Kiri Atomic OÜ veebilehe kontaktvormi kaudu', $sql) or exit('Meili saatmine ebaõnnestus.');
    echo "Täname!";
}
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Võta meiega ühendust</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="data[feedback_first_name]" type="text" placeholder="Eesnimi"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="data[feedback_last_name]" type="text"
                                       placeholder="Perekonnanimi"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="data[feedback_email]" type="text" placeholder="Email"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="data[feedback_phone]" type="text" placeholder="Telefon"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="data[feedback_text]"
                                          placeholder="Sisesta enda sõnum siia..."
                                          rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Saada</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Meie kool</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>

                        <div>
                            Tartu Kutsehariduskeskus<br/>
                            Kopli 1<br/>
                            Tartu<br/>
                            info@khk.ee<br/>
                        </div>
                        <hr/>
                    </div>
                </div>
                <div class="panel panel-default">
                    <br/>

                    <div id="map-canvas" style="height:300px;margin:0 20px 0 20px"></div>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
