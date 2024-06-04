<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $hotel->name ?? '') }}">
</div>
<div class="form-group">
    <label for="location">Location:</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $hotel->location ?? '') }}">
</div>
<div class="form-group">
    <label for="rooms">Rooms:</label>
    <input type="number" name="rooms" class="form-control" value="{{ old('rooms', $hotel->rooms ?? '') }}">
</div>
<div class="form-group">
    <label for="price_per_night">Price per Night:</label>
    <input type="number" step="0.01" name="price_per_night" class="form-control" value="{{ old('price_per_night', $hotel->price_per_night ?? '') }}">
</div>
<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control">{{ old('description', $hotel->description ?? '') }}</textarea>
</div>
