<?php
    include_once "includes\header.php";
?>




<div class="col-lg-10"> 
        <br>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="text-left">
                            <h1>Arbeitszeit</h1>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                <h3 class = "font-weight-bold">Status:</h3>
                            </div>
                            <div class="col-sm-2">
                                <h3>Arbeiten</h3>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <h2> Details</h2>
                                <p>Verstrichenen Arbeitszeiten: 0.1h <br>Eingelegte Pausen: 0h<br>Übrige Arbeitszeit (heute): 8.3h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="clock">
                    <div class="h1">
                    <img src="img/hourglass.png"  width = "10%" >
                        <?php
                         echo date("h:i:s A");
                        ?>
                        
                    </div>
                    
                </div>
            <br>
            <br><br><br><br><br>
                <!--aktionen-->
                <div class="text-left ober">
                    <h2>Aktionen</h2>
                </div>
            <br>
                <div class="row">
                    <div class="text-center"></div>
                <div class="col-sm-4"><button type="button" class="btn btn-primary" id="begin">Mit Arbeit beginnen</button></div>
                <div class="col-sm-4"><button type="button" class="btn btn-primary" id = "pause">Pause eintragen</button></div>
                <div class="col-sm-4"><button type="button" class="btn btn-primary" id = "verlassen">Arbeitplatz verlassen</button></div>
                </div>
             </div>
             <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
  </div>    
</body>
</html>

