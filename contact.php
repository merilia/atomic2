<!-- Contact with Map - START -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Võta meiega ühendust</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="Eesnimi" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Perekonnanimi" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Telefon" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message"
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
