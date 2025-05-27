<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Date of Birth</label>
    <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Gender</label>
    <select name="gender" class="form-control" required>
        <option value="">Select</option>
        <option value="Male" {{ (old('gender', $student->gender ?? '') == 'Male') ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ (old('gender', $student->gender ?? '') == 'Female') ? 'selected' : '' }}>Female</option>
    </select>
</div>
<div class="mb-3">
    <label>Phone Number</label>
    <input type="text" name="phone_number" value="{{ old('phone_number', $student->phone_number ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Address</label>
    <textarea name="address" class="form-control" rows="3" required>{{ old('address', $student->address ?? '') }}</textarea>
</div>
