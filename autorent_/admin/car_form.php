<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Mark</label>
        <input type="text" name="brand" class="form-control" value="<?php echo $car['brand'] ?? ''; ?>" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Mudel</label>
        <input type="text" name="model" class="form-control" value="<?php echo $car['model'] ?? ''; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Aasta</label>
        <input type="number" name="year" class="form-control" value="<?php echo $car['year'] ?? '2020'; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Reg number</label>
        <input type="text" name="registration_number" class="form-control" value="<?php echo $car['registration_number'] ?? ''; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Hind päevas</label>
        <input type="number" step="0.01" name="price_per_day" class="form-control" value="<?php echo $car['price_per_day'] ?? '30'; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Kütus</label>
        <input type="text" name="fuel_type" class="form-control" value="<?php echo $car['fuel_type'] ?? 'Bensiin'; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Käigukast</label>
        <input type="text" name="transmission" class="form-control" value="<?php echo $car['transmission'] ?? 'Manuaal'; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Kohad</label>
        <input type="number" name="seats" class="form-control" value="<?php echo $car['seats'] ?? '5'; ?>" required>
    </div>
    <div class="col-md-12 mb-3">
        <label class="form-label">Kirjeldus</label>
        <textarea name="description" class="form-control" rows="3"><?php echo $car['description'] ?? ''; ?></textarea>
    </div>
    <div class="col-md-8 mb-3">
        <label class="form-label">Pildi URL</label>
        <input type="text" name="image" class="form-control" value="<?php echo $car['image'] ?? 'https://loremflickr.com/400/250/car'; ?>" required>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Staatus</label>
        <select name="status" class="form-control">
            <option value="vaba">vaba</option>
            <option value="renditud">renditud</option>
            <option value="hoolduses">hoolduses</option>
        </select>
    </div>
</div>
