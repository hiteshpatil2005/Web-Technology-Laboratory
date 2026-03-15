import React from 'react'
import CardContent from './CardContent'

const Section2 = () => {
    const events = [
        {
            img: 'https://plus.unsplash.com/premium_photo-1731355866971-42046925bb95?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            color: 'royalblue',
            title:'Event 1',
            intro: '',
            tag: 'Satisfied'
        },
        {
            img: 'https://plus.unsplash.com/premium_photo-1663047305318-c6debe9f633c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d29ya2luZyUyMHByb2Zlc3Npb25hbHN8ZW58MHx8MHx8fDA%3D',
            color: 'lightseagreen',
            title:'Event 2',
            intro: '',
            tag: 'UnderServed'
        },
        {
            img: 'https://images.unsplash.com/photo-1771425105292-bb2737097d5a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D',
            color: '#f1910f',
            title:'Event 3',
            intro: '',
            tag: 'Underbanked'
        },
        {
            img: 'https://images.unsplash.com/photo-1771425105292-bb2737097d5a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D',
            color: '#f1910f',
            title:'Event 4',
            intro: '',
            tag: 'Underbanked'
        }
    ]
    return (
        <div className='mt-10'>
            <h1 className='text-7xl'>Live Events</h1>
            <div className='px-35 flex gap-24'>
               {events.map((event, index) => (
                    <div key={index} className='h-full shrink-0 w-80 rounded-4xl overflow-hidden relative'>
                        <img className='h-full w-full object-cover' src={event.img} alt={event.title} />
                        <CardContent index={index} title={event.title} tag={event.tag} color={event.color}/>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Section2
