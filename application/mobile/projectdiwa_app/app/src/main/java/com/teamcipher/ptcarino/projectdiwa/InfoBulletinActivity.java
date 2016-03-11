package com.teamcipher.ptcarino.projectdiwa;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;

import com.teamcipher.ptcarino.trial.R;

public class InfoBulletinActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info_bulletin);
    }

    public void onBackPressed() {
        Intent main = new Intent(this, MainActivity.class);
        startActivity(main);
        finish();
    }
}
