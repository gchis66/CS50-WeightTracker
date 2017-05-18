<h1>BMI CALCULATOR</h1>
<div class= "col-md-6">
BMI (Body Mass Index) is a measurement of tissue mass based on height and weight that applies to both men and women between the ages of 18 and 65 years.
<div class="bmitable">
<table id="bmi" border="1" align ="center">
    <tbody>
        <tr>
            <th>BMI</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>18 and under</td>
            <td bgcolor="fff5e4">Underweight</td>
        </tr>
        <tr>
            <td>Between 18.5 and 25</td>
            <td bgcolor="dcffdc">Healthy Weight</td>
        </tr>
        <tr>
            <td>Between 25 and 30</td>
            <td bgcolor= "fff5e4">Overweight</td>
        </tr>
        <tr>
            <td>31 and Over</td>
            <td bgcolor="ffcccc">Obese</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<div class="col-md-6">
<form action="quote.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="height" placeholder="height in inches" type="number"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="weight" placeholder="weight in lbs" type="number"/>
        </div>
        <div class="form-group">
             <button type="submit" class="btn btn-primary">Get BMI</button>
        </div>
    </fieldset>
</form>
</div>
