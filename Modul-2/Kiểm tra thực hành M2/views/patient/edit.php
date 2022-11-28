

<div class="container-fluid px-4">
<h1>Update</h1>

<form action="" method="post">
        <div class="mb-3">
            <label class="form-label">patient_name</label>
            <input type="text" class="form-control" name="patient_name"value="<?= $row->patient_name; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">day_hoppital</label>
            <input type="date" class="form-control" name="day_hoppital"value="<?= $row->day_hoppital; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">status</label>
            <input type="text" class="form-control" name="status"value="<?= $row->status; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">information_patient</label>
            <input type="text" class="form-control" name="information_patient"value="<?= $row->information_patient; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <input type="text" class="form-control" name="Gender"value="<?= $row->Gender; ?>"> <br>
        </div>
        <div class="mb-3">
            <label class="form-label">class</label>
            <input type="text" class="form-control" name="class"value="<?= $row->class; ?>"> <br>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>

</form>
</div>
