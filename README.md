
# AI Chatbot using Flask

This project is a simple AI chatbot built with Flask, designed to run locally for development and testing purposes. It demonstrates the implementation of a conversational AI model in a web application.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- ![Python](https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white) 3.6 or higher installed on your machine
- ![pip](https://img.shields.io/badge/pip-3775A9?style=for-the-badge&logo=pypi&logoColor=white) (Python package installer)

## Installation

Follow these steps to get your development environment running:

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/yourprojectname.git
cd yourprojectname
```

2. **Set up a Python virtual environment**

This step is optional but highly recommended to keep dependencies required by this project separate from your global Python environment.

```bash
python -m venv venv
```

- On Windows, activate the virtual environment with:
```bash
venv\Scripts\activate
```

- On Unix or MacOS, use:
```bash
source venv/bin/activate
```

3. **Install required packages**

Install all the dependencies listed in `requirements.txt` file.

```bash
pip install -r requirements.txt
```

4. **Environment Variables**

(Optional) If your application requires environment variables, create a `.env` file in the root directory and populate it with necessary key-value pairs.

## Running the Application

To run the application, use the following command from the root directory:

```bash
flask run
```

This will start a local web server. By default, Flask applications run on `http://127.0.0.1:5000/` (localhost port 5000). Open your web browser and navigate to this address to interact with the AI chatbot.

## Project Structure

- `app.py` - Entry point of the Flask application.
- `/templates` - Contains HTML files.
- `/static` - Contains static files like CSS, JavaScript, and images.
- `/venv` - Virtual environment directory (should not be committed to version control).

## Ignoring Files

Certain directories and files such as `venv`, `__pycache__`, and others containing sensitive information or that are specific to your development environment should not be committed to Git. Make sure your `.gitignore` file includes:

```
venv/
__pycache__/
.env
```

## Contributing

Contributions to this project are welcome. Please fork the repository and submit a pull request with your features or fixes.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details.


![Packages](https://github.com/user-attachments/assets/16b2f76d-9813-448c-a9e9-7e9f73b29f75)

![Booking form for pacakges](https://github.com/user-attachments/assets/a57c7da7-87d6-4f76-acff-9ce9a9d5089d)

![View Product](https://github.com/user-attachments/assets/1c7382bd-bd47-489f-a29e-d535e8ab3752)

![Update profile](https://github.com/user-attachments/assets/0a6762cc-e29d-4074-bba3-ffcf1c1aa4e8)

![your bookings](https://github.com/user-attachments/assets/baa22e13-f5f7-4561-92af-e531bbe8d342)

