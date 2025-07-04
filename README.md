 # School Management System (PHP/MySQL)

A modular school management system built with core PHP and MySQL, following a classic MVC-like structure. The system supports user authentication, student/teacher/parent management, class and resource management, activities, trips, quizzes, and reporting. It is designed for educational institutions to manage their operations digitally.

---

## Features

- **User Authentication**: Login/logout with session and cookie support for different user types (admin, teacher, student, parent)
- **Student Management**: Add, update, delete students; assign to classes; manage fees and parent info
- **Teacher Management**: Add, update, delete teachers; assign subjects, classes, and salary/bonus
- **Parent Management**: Add parent info, link to students, view invoices
- **Class Management**: Create and manage classes
- **Resource Management**: Add, update, and report on school resources (books, equipment, etc.)
- **Activities & Trips**: Register students for activities and trips, view history
- **Quiz System**: Teachers can create quizzes, add questions/answers, and students can solve them
- **Timetable Upload**: Teachers and admins can upload/view timetables (with AJAX file upload)
- **Search**: Search for teachers, students, resources, and trips
- **Reporting**: Generate reports for resources, student fees, activities, and trips

---

## Architecture & Main Modules

### Controllers (`/controller`)
- Handle form submissions and business logic for adding/updating students, teachers, classes, resources, activities, trips, quizzes, and deletions
- Example: `add_s_controller.php`, `add_t_controller.php`, `add_class_controller.php`, `add_resources.php`, `trip_Description_controller.php`, `create_quiz_controller.php`, `delete_controller.php`

### Models (`/models`)
- Represent core entities: `Admin`, `Teacher`, `Student`, `Parente`, `Staff`, `User`, `Classl`, `Recourses`, `Trip`, `Activity`, `quiz`, `question`, `Subject`
- Each model encapsulates data access and business logic (CRUD, search, linking, etc.)
- `DataBase.php`: Centralized MySQL connection and query logic, plus utility functions for search grids

### Views (`/views`)
- PHP/HTML templates for all UI: login, home, add/update forms, reports, registration, search, file upload, etc.
- Modular includes for header/footer, and dynamic content rendering
- AJAX file upload for timetables (`upload_t_te.php`, `upload_t_s.php`)
- Specialized views for activities, trips, quizzes, and reporting

---

## Project Structure

```
old/school/
  controller/   # All business logic and form handlers
  models/       # Data models and DB logic
  views/        # UI templates (forms, reports, lists, etc.)
  style/        # CSS files
```

---

## Database
- MySQL database (default: `english school`)
- Tables: `users`, `student`, `teacher`, `parent`, `class`, `resource`, `activity`, `trips`, `register_activity`, `reserve_trip`, `quize`, `quistions`, `answers`, `quize_content`, `student_fees`, etc.
- See model classes for schema details

---

## Setup & Usage

1. **Clone the repository** and place in your web server root (e.g., `htdocs` or `public_html`)
2. **Create the MySQL database** (default: `english school`) and import schema (see model classes for structure)
3. **Configure DB credentials** in `models/DataBase.php` if needed
4. **Access the app** via browser (e.g., `http://localhost/old/school/views/login.php`)
5. **Login** as admin/teacher/student/parent (create users directly in DB if needed)
6. **Use the UI** to manage students, teachers, classes, resources, activities, trips, quizzes, and reports

---

## Extensibility & Notes
- Modular code: add new features by creating new controllers/models/views
- No framework: pure PHP for learning and maximum control
- Security: Basic input validation; for production, add CSRF protection, password hashing, and stricter validation
- AJAX file upload for timetables (requires jQuery)
- Designed for educational use and as a learning project

---

## Author
- Mohamed (mohamedjs)

---

For questions or contributions, open an issue or contact the author.
