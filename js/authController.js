const User = require('./models/User')
const Role = require('./models/Role')
const bcrypt = require('bcryptjs')
const jwt = require('jsonwebtoken')
const {validationResult} = require('express-validator')
const {secret} = require('./config')

const generateAccessToken = (id, roles) => {
    const payload = {
        id,
        roles,
    }
    return jwt.sign(payload, secret, {expiresIn: "24h"})
}


class authController{
    async registration(req, res){
        try{
            const errors = validationResult(req)
            if(!errors.isEmpty()){
                return res.status(400).json({message: "Ошибка при регистрации", errors})
            }
            const {username, password} = req.body
            const candidate = await User.findOne({username})
            if(candidate){
                return res.status(400).json({message: "пользователь с тауим именем уже существует"})
            }
            const hashPassword = bcrypt.hashSync(password, 7)
            const userRole = await Role.findOne({value: "USER"})
            const user = new User({username, password: hashPassword, roles: [userRole.value]})
            await user.save()
            return res.status(200).json({message: "пользователь был успешно зарегестрирован"})
        } catch(e){
            console.log(e)
            res.status(400).json({message:'registration error'})
        }
    }

    async login(req, res){
        try{
            const {username, password} = req.body
            const user = await User.findOne({username})
            if(!user){
                return res.status(400).json({message: `пользователь ${username} не найден`})
            }

            const validPassword = bcrypt.compareSync(password, user.password)
            if(!validPassword){
                return res.status(400).json({message: "Введен неверный пароль"})
            }
            const token = generateAccessToken(user._id, user.roles)
            return res.status(200).json({token})


        } catch(e){
            console.log(e)
            res.status(400).json({message:'login error'})
        }
    }
    
    async getUsers(req, res){
        try{
            const users = await User.find()
            res.json(users)

            res.json("server works")
        } catch(e){
            console.log(e)
        }
    }

    async greet(req, res){
        res.status(200).json({headers: "Access-Control-Allow-Origin",message: 'Hello from options/greet!' })
    }
}

module.exports = new authController()