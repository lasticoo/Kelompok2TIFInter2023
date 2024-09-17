package com.T1CO.thestudent; // Ganti dengan package Anda

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton; // Pastikan mengimpor ImageButton
import androidx.appcompat.app.AppCompatActivity;

import com.T1CO.thestudent.RegisterActivity;



import com.T1CO.thestudent.RegisterActivity;

public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Temukan ImageButton berdasarkan ID
        ImageButton buttonNext = findViewById(R.id.button_next);

        // Mengatur listener untuk ImageButton
        buttonNext.setOnClickListener(v -> {
            // Berpindah ke RegisterActivity
            Intent intent = new Intent(MainActivity.this, RegisterActivity.class);
            startActivity(intent);
        });
    }
}
