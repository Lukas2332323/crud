from flask import Flask, request

app = Flask(__name__)

@app.route('/validar_login.py', methods=['POST'])
def validar_login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        # Aquí puedes realizar cualquier acción con los datos recibidos del formulario
        
        # Por ejemplo, simplemente imprimir los datos recibidos
        print("Username:", username)
        print("Password:", password)

        
        
        # Puedes devolver algún mensaje de éxito o redirigir a una nueva página
        return "Datos recibidos correctamente."

if __name__ == '__main__':
    app.run(debug=True)
