<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Semester;
use App\Models\Course;
use App\Models\YearLevel;
use App\Models\EnrolledSubjects;
use App\Models\Enrollment_Record;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('year_levels')->insert([
            ['year_name' => '1st year', 'created_at' => now(), 'updated_at' => now()],
            ['year_name' => '2nd year', 'created_at' => now(), 'updated_at' => now()],
            ['year_name' => '3rd year', 'created_at' => now(), 'updated_at' => now()],
            ['year_name' => '4th year', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('billings')->insert([
            ['name' => 'School ID', 'amount' => 100],
            ['name' => 'Athletic Fee', 'amount' => 100],
            ['name' => 'Cultural Fee', 'amount' => 100],
            ['name' => 'Guidance Fee', 'amount' => 50],
            ['name' => 'Computer Fee', 'amount' => 200],
            ['name' => 'Library Fee', 'amount' => 150],
            ['name' => 'Medical and Dental Fee', 'amount' => 100],
            ['name' => 'Registration Fee', 'amount' => 1000],
            ['name' => 'Student Insurance', 'amount' => 100],
        ]);

        DB::table('courses')->insert([
            ['year_id' => 1, 'course_name' => 'BSIT', 'created_at' => now(), 'updated_at' => now()],
            ['year_id' => 2,  'course_name' => 'BSIT','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 3,  'course_name' => 'BSIT','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 4,  'course_name' => 'BSIT','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 1,  'course_name' => 'BSBA-MM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 2,  'course_name' => 'BSBA-MM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 3,  'course_name' => 'BSBA-MM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 4,  'course_name' => 'BSBA-MM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 1,  'course_name' => 'BSED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 2,  'course_name' => 'BSED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 3,  'course_name' => 'BSED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 4,  'course_name' => 'BSED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 1,  'course_name' => 'BEED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 2,  'course_name' => 'BEED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 3,  'course_name' => 'BEED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 4,  'course_name' => 'BEED','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 1,  'course_name' => 'BSBA-FM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 2,  'course_name' => 'BSBA-FM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 3,  'course_name' => 'BSBA-FM','created_at' => now(), 'updated_at' => now()],
            ['year_id' => 4,  'course_name' => 'BSBA-FM','created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('semesters')->insert([
            ['semester_name' => '1st Semester', 'created_at' => now(), 'updated_at' => now()],
            ['semester_name' => '2nd Semester', 'created_at' => now(), 'updated_at' => now()],
            ['semester_name' => 'Summer', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('subjects')->insert([
            // Bsit 1st year

            ['subject' => 'Understanding the self','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Purposive Communication','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Mathematics in the Modern world','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Good Manners and Right Conduct','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Movement Competency Training','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'CWTS/ROTC/LTS','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Introduction to Computing','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'IT Fundamentals','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Programming 1','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Bsit 1st year (2nd sem)
            ['subject' => 'Readings in Philppine History with IP educ','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'The Comtemporary World','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Gender and Society with Peace','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Fitness Training','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'CWTS/ROTC/LTS 2','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Programming 2','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Integrated Application Software','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Descrete Mathematics','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // bsit 2nd year
            ['subject' => 'Art Appreation','year_id' => 1,'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Science, Technology and Society','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Entrepreneural Mind','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Life, Works and Writtings of Dr. Jose Rizal','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Dance Sports/In-dual/Group/Outdoor','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Accounting for IT','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Networking 1','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Data Structures and Algorithms','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Object-Oriented Programming','year_id' => 1, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // bsit 2nd year (2nd sem)

            ['subject' => 'Living in the IT Era','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Ethics','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Survey of Philppine Literature in English','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Team Sport','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Networking 2','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Human Computer Interaction 1','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Information Management','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Event-Driven Programming','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Bsit 3rd year

            ['subject' => 'Methods of Research','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Platform of Technologies 1 (Tangible Technologies)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Human Computer Interaction 2','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Information Assurance and Security 1','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'System Integration and Architecture 1','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Web Systems and Technologies','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Application Development and Emerging Technology','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['subject' => 'Fundamentals of Database System','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            
          //bsit 3rd (2nd sem)
           ['subject' => 'Information Assurance and Security 2','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'System Integration adn Architecture 2','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'Integrative Programming','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'Platform and Technologies 2 (Intagible Technologies)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'IT Elective 1: Advance Database System','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'IT Elective 2: Mobile Application Development','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['subject' => 'IT Elective 3: Information System','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

        //bsit 3rd year (summer)
        ['subject' => 'Capstone Project and Research 1','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'IT Elective 4: Management Information System','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'Social and Professional Issues','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

        // bsit 4th
        ['subject' => 'Capstone Project and Research 2','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'System Administration and Maintenance','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'IT Elective 5: Cloud Computing','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'IT Elective 6: Internet Of Things','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],


        // bsba
        ['subject' => 'BSBA(1ST,SEM1,SUB1)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,SEM1,SUB2)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,SEM1,SUB3)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba (2nd sem)
        ['subject' => 'BSBA(1ST,S3M2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,S3M2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,S3M2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(1ST,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        
        // Bsba 2nd year
        ['subject' => 'BSBA(2nd,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba 2nd year(2nd sem)
        ['subject' => 'BSBA(2nd,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(2nd,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba 3rd year
        ['subject' => 'BSBA(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba 3rd year (2nd sem)
        ['subject' => 'BSBA(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // Bsba summer
        ['subject' => 'BSBA(3RD,SUMMER,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SUMMER,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SUMMER,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(3RD,SUMMER,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

        //Bsba 4th
        ['subject' => 'BSBA(4th,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba 4th (2nd sem)
        ['subject' => 'BSBA(4th,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBA(4th,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm
        ['subject' => 'BSBAFM(1st,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm (2nd sem)
        ['subject' => 'BSBAFM(1st,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(1st,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 2nd year
        ['subject' => 'BSBAFM(2ND,SEM1,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM1,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM1,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 2nd year (2nd sem)
        ['subject' => 'BSBAFM(2ND,SEM2,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM2,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM2,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(2ND,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 3rd year
        ['subject' => 'BSBAFM(3RD,SEM1,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM1,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM1,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 3rd year (2nd sem)
        ['subject' => 'BSBAFM(3RD,SEM2,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM2,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM2,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 3rd (summer)
        ['subject' => 'BSBAFM(SUMMER,SEM1,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(SUMMER,SEM1,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(SUMMER,SEM1,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(SUMMER,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 4th year
        ['subject' => 'BSBAFM(4TH,SEM2,SUB1)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // bsba fm 4th year (2nd sem)
        ['subject' => 'BSBAFM(4TH,SEM2,SUB1)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSBAFM(4TH,SEM2,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // beed 1st year
        ['subject' => 'BEED(1ST,SEM1,SUB1)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB2)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB3)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // beed 1st (2nd sem)
        ['subject' => 'BEED(1ST,SEM1,SUB1)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB2)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB3)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(1ST,SEM1,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // beed 2nd year
        ['subject' => 'BEED(2ND,SEM1,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM1,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM1,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // beed 2nd year (2nd sem)
        ['subject' => 'BEED(2ND,SEM2,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM2,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM2,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(2ND,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // beed 3rd year
        ['subject' => 'BEED(3RD,SEM1,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM1,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM1,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // beed 3rd year (2nd sem)
        ['subject' => 'BEED(3RD,SEM2,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM2,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM2,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        // beed summer
        ['subject' => 'BEED(SUMMER,SEM3,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(SUMMER,SEM3,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(SUMMER,SEM3,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(SUMMER,SEM3,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

        // beed 4th year
        ['subject' => 'BEED(4TH,SEM1,SUB1)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        // beed 4th year (2nd sem)
        ['subject' => 'BEED(4TH,SEM1,SUB1)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BEED(4TH,SEM1,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        //bsed 1st year
        ['subject' => 'BSED(1ST,SEM1,SUB1)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM1,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM1,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM1,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        //bsed 1st (2nd sem)
        ['subject' => 'BSED(1ST,SEM2,SUB1)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM2,SUB2)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM2,SUB3)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(1ST,SEM2,SUB4)','year_id' => 1, 'unit' => '3', 'course_id' => 1, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        //bsed 2nd year
        ['subject' => 'BSED(2ND,SEM1,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM1,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM1,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM1,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        //bsed 2nd (2nd sem)
        ['subject' => 'BSED(2ND,SEM2,SUB1)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM2,SUB2)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM2,SUB3)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(2ND,SEM2,SUB4)','year_id' => 2, 'unit' => '3', 'course_id' => 2, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

        //bsed 3rd year
        ['subject' => 'BSED(3RD,SEM1,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(3RD,SEM1,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(3RD,SEM1,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['subject' => 'BSED(3RD,SEM1,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

    //bsed 3rd (2nd sem)
    ['subject' => 'BSED(3RD,SEM2,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(3RD,SEM2,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(3RD,SEM2,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(3RD,SEM2,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],

    //bsed summer
    ['subject' => 'BSED(SUMMER,SEM3,SUB1)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(SUMMER,SEM3,SUB2)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(SUMMER,SEM3,SUB3)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(SUMMER,SEM3,SUB4)','year_id' => 3, 'unit' => '3', 'course_id' => 3, 'semester_id' => 3, 'created_at' => now(), 'updated_at' => now()],

    // bsed 4th
    ['subject' => 'BSED(4TH,SEM1,SUB1)','year_id' => 4, 'unit' => '4', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM1,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM1,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM1,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 1, 'created_at' => now(), 'updated_at' => now()],

    //bsed 4th (2nd sem)
    ['subject' => 'BSED(4TH,SEM2,SUB1)','year_id' => 4, 'unit' => '4', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM2,SUB2)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM2,SUB3)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['subject' => 'BSED(4TH,SEM2,SUB4)','year_id' => 4, 'unit' => '3', 'course_id' => 4, 'semester_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    
    ]);
        DB::table('students')->insert([
            ['school_id' => '2023-4-0023', 'last_name' => 'torentirra', 'first_name' => 'james brylle', 'address' => 'igpit','phone' => '12345678910', 'email' => 'james@jamesbrylle.com'],
            ['school_id' => '2023-4-0024', 'last_name' => 'nangcas', 'first_name' => 'ian ray', 'address' => 'igpit','phone' => '12345678910', 'email' => 'ianray@gmail.com'],
            ['school_id' => '2023-4-0025', 'last_name' => 'ramil', 'first_name' => 'sharlin', 'address' => 'laguindigan','phone' => '21561278941', 'email' => 'sharlinramil@gmail.com'],
            ['school_id' => '2023-4-0026', 'last_name' => 'abragan', 'first_name' => 'christian john', 'address' => 'barra','phone' => '36954547642', 'email' => 'christianabragan@gmail.com'],
            ['school_id' => '2023-4-0027', 'last_name' => 'Hadoken', 'first_name' => 'Kurama', 'address' => 'Konoha','phone' => '09563251478', 'email' => '.hadokenkuruma@gmail.com'],
            ['school_id' => '2023-4-0028', 'last_name' => 'Pol', 'first_name' => 'Ken', 'address' => 'CDO','phone' => '09652314754', 'email' => 'polken@gmail.com'],
            ['school_id' => '2023-4-0029', 'last_name' => 'chicken', 'first_name' => 'joy', 'address' => 'jollibee','phone' => '8700', 'email' => 'chickenjoy@gmail.com'],
            ['school_id' => '2023-4-0030', 'last_name' => 'donalds', 'first_name' => 'mac', 'address' => 'MCDO','phone' => '8900', 'email' => 'macdonalds@gmail.com'],
            ['school_id' => '2023-4-0031', 'last_name' => 'Estandarte', 'first_name' => 'Reymart', 'address' => 'Opol','phone' => '09325412475', 'email' => 'babok@gmail.com'],
            ['school_id' => '2023-4-0032', 'last_name' => 'Arbiso', 'first_name' => 'Frank', 'address' => 'Igpit Zone 5','phone' => '09745213514', 'email' => 'Arbisofrank@gmail.com'],
            ['school_id' => '2023-4-0033', 'last_name' => 'Ordaniza', 'first_name' => 'Jhonmark', 'address' => 'Igpit','phone' => '09325412478', 'email' => 'Ordanizajhonmark.com'],
            ['school_id' => '2023-4-0034', 'last_name' => 'Estemonio', 'first_name' => 'Jerick', 'address' => 'Poblacion, Opol','phone' => '09632157485', 'email' => 'EstemonioJerick@gmail.com'],
            ['school_id' => '2023-4-0035', 'last_name' => 'James', 'first_name' => 'Max', 'address' => 'Barra, Opol','phone' => '09264235475', 'email' => 'maxjames@gmail.com'],
            ['school_id' => '2023-4-0036', 'last_name' => 'Pabolino', 'first_name' => 'Roderick', 'address' => 'Bulua, Cagayan de Oro','phone' => '09215987521', 'email' => 'roderickpabs@gmail.com'],
            ['school_id' => '2023-4-0037', 'last_name' => 'Marangal', 'first_name' => 'Pauline', 'address' => 'Bonbon, Opol','phone' => '09987546231', 'email' => 'PaulineM@gmail.com'],
            ['school_id' => '2023-4-0038', 'last_name' => 'Batakan', 'first_name' => 'Marj', 'address' => 'Mulogan, Opol','phone' => '09285644245', 'email' => 'marjbatakank@gmail.com'],
            ['school_id' => '2023-4-0039', 'last_name' => 'Malapatan', 'first_name' => 'Joseph', 'address' => 'Patag, Opol','phone' => '09652465856', 'email' => 'josephmalapatan@gmail.com'],



        ]);

        DB::table('enrollment_records')->insert([
            ['student_id' => 1, 'course_id' => 1, 'year_id' => 1,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 1, 'course_id' => 1, 'year_id' => 2,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 3, 'course_id' => 1, 'year_id' => 3, 'semester_id' => 1,'status' => 'paid','created_at' => now()],
            ['student_id' => 4, 'course_id' => 1, 'year_id' => 4,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 5, 'course_id' => 13, 'year_id' => 1,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 6, 'course_id' => 14, 'year_id' => 2,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 7, 'course_id' => 15, 'year_id' => 3, 'semester_id' => 1,'status' => 'paid','created_at' => now()],
            ['student_id' => 8, 'course_id' => 16, 'year_id' => 4,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 9, 'course_id' => 9, 'year_id' => 1, 'semester_id' => 1,'status' => 'paid','created_at' => now()],
            ['student_id' => 10, 'course_id' => 10, 'year_id' => 2,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 11, 'course_id' => 11, 'year_id' => 3,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 12, 'course_id' => 12, 'year_id' => 4,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 13, 'course_id' => 17, 'year_id' => 4,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 14, 'course_id' => 17, 'year_id' => 1,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 15, 'course_id' => 17, 'year_id' => 3,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 16, 'course_id' => 5, 'year_id' => 4,'semester_id' => 1, 'status' => 'paid','created_at' => now()],
            ['student_id' => 17, 'course_id' => 6, 'year_id' => 3, 'semester_id' => 1,'status' => 'payee','created_at' => now()],
        ]);

        DB::table('enrolled_subjects')->insert([
            ['enrollment_record_id' => 1, 'subject_id' => 1],
            ['enrollment_record_id' => 1, 'subject_id' => 2],
            ['enrollment_record_id' => 1, 'subject_id' => 3],
            ['enrollment_record_id' => 1, 'subject_id' => 4],
            ['enrollment_record_id' => 1, 'subject_id' => 5],
            ['enrollment_record_id' => 1, 'subject_id' => 6],
            ['enrollment_record_id' => 1, 'subject_id' => 7],
            ['enrollment_record_id' => 1, 'subject_id' => 8],
            
            ['enrollment_record_id' => 2, 'subject_id' => 1],
            ['enrollment_record_id' => 2, 'subject_id' => 2],
            ['enrollment_record_id' => 2, 'subject_id' => 3],
            ['enrollment_record_id' => 2, 'subject_id' => 4],
            ['enrollment_record_id' => 2, 'subject_id' => 5],
            ['enrollment_record_id' => 2, 'subject_id' => 6],
            ['enrollment_record_id' => 2, 'subject_id' => 7],
            ['enrollment_record_id' => 2, 'subject_id' => 8],
        ]);
    }
}
