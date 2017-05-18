<form action="sell.php" method="post">
    <fieldset>
  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
  <label class="radio-inline"><input type="radio" name="optradio">Female</label>
        <div class="form-group">
            <input class="form-control" name="bf1" placeholder="Weight" type="number"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="bf2" placeholder="Wrist Circumference" type="number"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="bf3" placeholder="Waist Circumference" type="number"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="bf4" placeholder="Hip Circumference" type="number"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="bf5" placeholder="Forearm Circumference" type="number"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Find Your Body Fat %</button>
        </div>
    </fieldset>
</form>