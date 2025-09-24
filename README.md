# yii2-rms-skeleton
Yii2 Recruitment Management System (RMS) Skeleton# Yii2 Recruitment Management System (RMS) Skeleton
# Yii2 Recruitment Management System Skeleton

## Setup

1. Clone the repo  
   `git clone https://github.com/<username>/yii2‑rms‑skeleton.git`

2. Install dependencies  
   `composer install`

3. Configure database in `config/db.php`

4. Register modules in `config/web.php`

5. Run migrations  
   `php yii migrate`

6. Optionally configure mailer, resume upload path, etc.

## Modules

- **admin** — jobs, applications management  
- **applicant** — applicant's dashboard, apply for jobs etc.  
- **interview** — scheduling, feedback etc. (agar use kiya ho)

## Roles

- `admin`  
- `applicant`

## File Upload & Email

- Resume uploads: `uploads/resumes/…`  
- Email notifications via configured SMTP


## Setup Instructions

1. Clone this repository



2. Install dependencies via Composer:


3. Configure database in `config/db.php`.

4. Register modules in `config/web.php`:

```php
'modules' => [
    'admin' => [
        'class' => 'app\modules\admin\Module',
    ],
    'applicant' => [
        'class' => 'app\modules\applicant\Module',
    ],
    'interview' => [
        'class' => 'app\modules\interview\Module',
    ],
],
php yii migrate
yii2‑rms‑skeleton/
├─ modules/
│   ├─ admin/
│   │   ├─ Module.php
│   │   ├─ controllers/
│   │   │   ├─ JobController.php
│   │   │   └─ ApplicationController.php
│   │   ├─ models/
│   │   │   ├─ Job.php
│   │   │   └─ Application.php
│   │   └─ views/
│   │       ├─ job/
│   │       │   ├─ index.php
│   │       │   ├─ create.php
│   │       │   ├─ update.php
│   │       │   └─ view.php
│   │       └─ application/
│   │           ├─ index.php
│   │           └─ view.php
│   ├─ applicant/
│   │   ├─ Module.php
│   │   ├─ controllers/
│   │   │   ├─ ApplyController.php
│   │   │   └─ ProfileController.php
│   │   ├─ models/
│   │   │   └─ Applicant.php
│   │   └─ views/
│   │       ├─ apply/
│   │       │   └─ create.php
│   │       └─ profile/
│   │           ├─ view.php
│   │           └─ edit.php
│   └─ interview/   (optional)
│       ├─ Module.php
│       ├─ controllers/
│       │   └─ InterviewController.php
│       ├─ models/
│       │   └─ Interview.php
│       └─ views/
│           └─ interview/
│               ├─ schedule.php
│               └─ feedback.php
├─ common/
│   ├─ models/
│   │   └─ User.php
│   └─ components/
│       ├─ AccessControl.php
│       └─ FileUpload.php
├─ config/
│   ├─ web.php
│   ├─ console.php
│   └─ db.php
├─ migrations/
├─ controllers/   (public / site controllers etc.)
├─ models/        (shared or common models)
├─ views/         (layouts, global site views)
├─ web/
│   ├─ index.php
│   └─ assets/
├─ composer.json
└─ README.md
