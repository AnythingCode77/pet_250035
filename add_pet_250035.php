<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Hewan</title>
</head>
<body>
    <h1>Pet Clinic</h1>
    <hr>
    <h2>Form Tambah Data Hewan</h2>

    <form method="POST" action="create_pet_250035.php">
        <table>
            <tr>
                <td><label for="pet_name">Nama hewan</label></td>
                <td>
                    <input
                        type="text"
                        id="pet_name"
                        name="pet_name_250035"
                        maxlength="30"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td><label for="pet_type">Jenis hewan</label></td>
                <td>
                    <select id="pet_type" name="pet_type_250035" required>
                        <option value="">-- Pilih jenis hewan --</option>
                        <option value="Cat">Kucing</option>
                        <option value="Dog">Anjing</option>
                        <option value="Reptile">Reptil</option>
                        <option value="Bird">Burung</option>
                        <option value="Rodent">Hewan pengerat</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Jenis kelamin</td>
                <td>
                    <label>
                        <input
                            type="radio"
                            name="pet_gender_250035"
                            value="Male"
                            required
                        >
                        Male
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="pet_gender_250035"
                            value="Female"
                        >
                        Female
                    </label>
                </td>
            </tr>

            <tr>
                <td><label for="pet_age">Umur (bulan)</label></td>
                <td>
                    <input
                        type="number"
                        id="pet_age"
                        name="pet_age_250035"
                        min="0"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td><label for="pet_owner">Nama pemilik</label></td>
                <td>
                    <input
                        type="text"
                        id="pet_owner"
                        name="pet_owner_250035"
                        maxlength="50"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td><label for="pet_address">Alamat pemilik</label></td>
                <td>
                    <textarea
                        id="pet_address"
                        name="pet_address_250035"
                        maxlength="100"
                        required
                    ></textarea>
                </td>
            </tr>

            <tr>
                <td><label for="pet_phone">Telepon pemilik</label></td>
                <td>
                    <input
                        type="tel"
                        id="pet_phone"
                        name="pet_phone_250035"
                        maxlength="15"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
