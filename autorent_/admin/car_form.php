<label>Mark</label>
<input type="text" name="brand" class="form-control"
value="<?php echo $car['brand'] ?? ''; ?>">

<label>Mudel</label>
<input type="text" name="model" class="form-control"
value="<?php echo $car['model'] ?? ''; ?>">

<label>Aasta</label>
<input type="number" name="year" class="form-control"
value="<?php echo $car['year'] ?? ''; ?>">

<label>Reg number</label>
<input type="text" name="registration_number" class="form-control"
value="<?php echo $car['registration_number'] ?? ''; ?>">

<label>Hind päevas</label>
<input type="number" name="price_per_day" class="form-control"
value="<?php echo $car['price_per_day'] ?? ''; ?>">

<label>Kütus</label>
<input type="text" name="fuel_type" class="form-control"
value="<?php echo $car['fuel_type'] ?? ''; ?>">

<label>Käigukast</label>
<input type="text" name="transmission" class="form-control"
value="<?php echo $car['transmission'] ?? ''; ?>">

<label>Kohad</label>
<input type="number" name="seats" class="form-control"
value="<?php echo $car['seats'] ?? ''; ?>">

<label>Kirjeldus</label>
<textarea name="description" class="form-control"><?php echo $car['description'] ?? ''; ?></textarea>

<label>Pildi URL</label>
<input type="text" name="image" class="form-control"
value="<?php echo $car['image'] ?? ''; ?>">

<label>Staatus</label>
<select name="status" class="form-control">
    <option value="vaba">vaba</option>
    <option value="renditud">renditud</option>
    <option value="hoolduses">hoolduses</option>
</select>
