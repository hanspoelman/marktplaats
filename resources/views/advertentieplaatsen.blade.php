@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Plaats advertentie</div>

                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST">
                        {{ csrf_field() }}
                
                <div class="form-group">    
                <label for="titel" class="col-md-4 control-label">Titel</label>
                <input type="text" id="titel" name="titel"><br>
                <br>
                  
                    
                    <label for="categorie" class="col-md-4 control-label">Categorie</label>
                    <select name="categorie">
                        <option value="apparatuur">Apparatuur</option>    
                        <option value="auto">Auto</option>
                        <option value="boeken">Boeken</option>
                        <option value="cd en dvd">CD en DVD</option>
                        <option value="computers">Computers</option>
                        <option value="Hobby">Hobby</option>
                        <option value="kleding">Kleding</option>
                        <option value="kunst">Kunst</option>   
                        <option value="meubels">Meubels</option>
                        <option value="overig">Overig</option>    
                        <option value="telecommunicatie">Telecommunicatie</option>
                        <option value="sport">Sport</option>    
                        <option value="tickets">Tickets</option>
                        <option value="tuin">Tuin</option>
                        <option value="vakantie">Vakantie</option>
                        <option value="watersport">Watersport</option>
                    </select><br>
                    <br>
                        
                    <label for="beschrijving" class="col-md-4 control-label">Omschrijving</label>
                    <input type="textarea" id="beschrijving" name="beschrijving"><br>
                    <br>
                    <label for="prijs" class="col-md-4 control-label">Vraagprijs</label>
                    <input type="text" id="prijs" name="prijs"><br>
                    <br>
                    <label for="prijstype" class="col-md-4 control-label"></label>
                    <select id="prijstype" name="prijstype" class="col-md-2 control-label"><br>
                        <option value="vraagprijs" >Vraagprijs</option>
                        <option value="bieden" >Bieden</option>
                        <option value="notk" >N.O.T.K.</option>
                        <option value="ruilen" >Ruilen</option>
                        <option value="gratis" >gratis</option>  
                    </select><br>
                    <br>
                    <label for="submit" class="col-md-4 control-label"></label>
                    <input type=submit id="submit" name="submit" value="plaatsen">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

