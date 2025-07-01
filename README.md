# Library Management System

Simple MVC-lite backend setup.



## 📘 PHP OOP Crash Guide — For Beginners

---

### 🧱 What is a **Class**?

A **class** is a **blueprint** for creating something.
It defines **what an object is** and **what it can do**.

```php
class Car {
  // Properties and methods go here
}
```

---

### 🚗 What is an **Object**?

An **object** is a **real thing** built from a class.

```php
$myCar = new Car();
```

Now `$myCar` is an actual car object, built using the `Car` blueprint.
You can create many objects from one class.

---

### 🧰 What are **Properties**?

These are **variables inside a class**.
They hold the object’s data — like attributes.

```php
class Car {
  public $color;
  public $speed;
}
```

Example:

```php
$myCar->color = "red";
$myCar->speed = 80;
```

---

### ⚙️ What are **Methods**?

Methods are just **functions inside a class**.
They define what the object can do.

```php
class Car {
  public function drive() {
    echo "Vroom vroom!";
  }
}
```

Call the method like this:

```php
$myCar->drive(); // Vroom vroom!
```

---

### 🔑 What is `$this`?

`$this` means **“this object I'm inside right now.”**

```php
class Car {
  public $color;

  public function setColor($color) {
    $this->color = $color;
  }
}
```

When you say `$this->color`, you're talking about the `color` of **this** specific car object.

---

### 🧠 What is a **Constructor**?

A constructor is a special method that runs **automatically** when you create a new object.

```php
class Car {
  public $color;

  public function __construct($color) {
    $this->color = $color;
  }
}
```

Then use it like:

```php
$myCar = new Car("blue");
echo $myCar->color; // blue
```

---

### 🆕 What is `new`?

The `new` keyword is used to **create an object from a class**.

```php
$car = new Car();
```

This tells PHP:

> "Hey, make a fresh object based on the Car class."

---

### ✅ Summary Table

| Term            | What it means                                   |
| --------------- | ----------------------------------------------- |
| `class`         | A blueprint/template for creating objects       |
| `object`        | A real thing made from a class                  |
| `property`      | A variable that holds an object’s data          |
| `method`        | A function that performs actions in the object  |
| `$this`         | Refers to the current object                    |
| `__construct()` | Special method that runs when object is created |
| `new`           | Keyword to create a new object from a class     |

---

### 💡 PHP OOP Example (All Together)

```php
class Book {
  public $title;

  public function __construct($title) {
    $this->title = $title;
  }

  public function read() {
    echo "Reading $this->title...";
  }
}

$book = new Book("The Alchemist");
$book->read(); // Reading The Alchemist...
```

---
