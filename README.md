# Yii2 Recruitment Management System (RMS) - Skeleton

This is a minimal skeleton to get you started with a modular Yii2 Recruitment Management System.
It includes modules: admin, applicant, interview; common components; migrations; and a seed command.

## Quick setup
1. Extract the ZIP into your Yii2 basic-app project (or use as project root).
2. Run `composer install`.
3. Edit `config/db.php` for DB connection.
4. Set `cookieValidationKey` in `config/web.php`.
5. Create `web/uploads` folder and give write permission.
6. Run migrations:
   ```
   php yii migrate
   ```
7. Seed demo data:
   ```
   php yii seed
   ```

## Routes
- Admin: /admin/job, /admin/application
- Applicant: /applicant/profile/view?id=1, /applicant/apply/create?job_id=1&applicant_id=1
- Interview: /interview/interview/index, /interview/interview/schedule?application_id=1
