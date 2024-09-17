package com.T1CO.thestudent;

import android.app.DatePickerDialog;
import android.os.Bundle;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.Spinner;
import android.widget.Toast;
import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import java.util.Calendar;

public class RegisterActivity extends AppCompatActivity {

    private EditText fullnameEditText;
    private EditText usernameEditText;
    private EditText passwordEditText;
    private EditText emailEditText;
    private EditText birthdateEditText;
    private EditText addressEditText;
    private Spinner genderSpinner;
    private Spinner religionSpinner;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_register);

        // Inisialisasi EditText dan Spinner
        fullnameEditText = findViewById(R.id.fullname);
        usernameEditText = findViewById(R.id.username);
        passwordEditText = findViewById(R.id.password);
        emailEditText = findViewById(R.id.email);
        birthdateEditText = findViewById(R.id.birthdate);
        addressEditText = findViewById(R.id.address);
        genderSpinner = findViewById(R.id.gender);
        religionSpinner = findViewById(R.id.religion);

        // Tambahkan listener untuk EditText tanggal lahir
        birthdateEditText.setOnClickListener(v -> showDatePickerDialog());

        // Inisialisasi tombol submit
        ImageButton submitButton = findViewById(R.id.submit_button);
        submitButton.setOnClickListener(v -> processRegistration());

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }

    private void showDatePickerDialog() {
        final Calendar calendar = Calendar.getInstance();
        int year = calendar.get(Calendar.YEAR);
        int month = calendar.get(Calendar.MONTH);
        int day = calendar.get(Calendar.DAY_OF_MONTH);

        DatePickerDialog datePickerDialog = new DatePickerDialog(
                this,
                (view, selectedYear, selectedMonth, selectedDay) -> {
                    selectedMonth += 1; // bulan dimulai dari 0
                    String date = selectedDay + "/" + selectedMonth + "/" + selectedYear;
                    birthdateEditText.setText(date);
                },
                year, month, day);
        datePickerDialog.show();
    }

    private void processRegistration() {
        // Mengambil data dari EditText dan Spinner
        String fullname = fullnameEditText.getText().toString();
        String username = usernameEditText.getText().toString();
        String password = passwordEditText.getText().toString();
        String email = emailEditText.getText().toString();
        String birthdate = birthdateEditText.getText().toString();
        String address = addressEditText.getText().toString();
        String gender = genderSpinner.getSelectedItem().toString();
        String religion = religionSpinner.getSelectedItem().toString();

        // Menampilkan pesan registrasi berhasil dengan semua data
        String messageString = "Registrasi berhasil\n" +
                "Nama: " + fullname + "\n" +
                "Username: " + username + "\n" +
                "Email: " + email + "\n" +
                "Tanggal Lahir: " + birthdate + "\n" +
                "Alamat: " + address + "\n" +
                "Jenis Kelamin: " + gender + "\n" +
                "Agama: " + religion;

        Toast.makeText(this, messageString, Toast.LENGTH_LONG).show();
    }
}