<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>
<body>
    <form action="{{route('contact-store')}}" method="post">
        @csrf
        <div>
            <div>
                <input type="text" name="name" id="name" placeholder="Your name" value="jao luca">
                <label for="name">Your name</label>
            </div>
        </div>

        <div>
            <input type="text" name="email" id="email" placeholder="your email" value="jao@hotmail.com">
            <label for="email">Your email</label>
        </div>

        <div>
            <input type="text" name="subject" id="subject" placeholder="Subject" value='aaaaa'>

            <label for="subject">Subject</label>
        </div>
        <div>
            <textarea type='text' id="message" name="message" rows="2">
                Minha mensagem de contato
            </textarea>
            <label for="message">Your Message</label>
        </div>

    <div>
        <button type="submit">Send</button>
    </div>

</form>

</body>
</html>
