const express = require('express')
const mongoose = require('mongoose')
const cors = require('cors');
const authRouter = require('./authRouter')

const PORT = process.env.PORT || 5000

const app = express()

const corsOptions = {
    origin: 'http://127.0.0.1:5500',
    methods: ['GET', 'POST', 'PUT', 'DELETE'],
    allowedHeaders: ['Content-Type', 'Authorization'],
    credentials: true
  };
  
app.use(cors(corsOptions));

app.use(express.json())
app.use("/auth", authRouter)


const start = async () => {
    try {
        await mongoose.connect(`mongodb+srv://agapovdanya:osx1R9kR00McNuGP@cluster0.h9fqp4l.mongodb.net/auth_roles?retryWrites=true&w=majority`)
        app.listen(PORT, () => console.log(`server started on port ${PORT}`))
    } catch (e) {
        console.log(e)
    }
}

start()