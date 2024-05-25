// Cards.js
import React from 'react';
import { DragDropContext, Droppable } from 'react-beautiful-dnd';
import CardsStyle from './CardsStyle';
import ReactDOM from 'react-dom/client'
const initialCards = [
  { id: 'card-1', content: 'Card 1' },
  { id: 'card-2', content: 'Card 2' },
  { id: 'card-3', content: 'Card 3' },
  { id: 'card-4', content: 'Card 4' }

];

const Cards = () => {
  const [cards, setCards] = React.useState(initialCards);

  const handleDragEnd = (result) => {
    if (!result.destination) return; // dropped outside the list

    const newCards = Array.from(cards);
    const [removed] = newCards.splice(result.source.index, 1);
    newCards.splice(result.destination.index, 0, removed);

    setCards(newCards.map((card, index) => ({ ...card, id: `card-${index + 1}` }))); // Update card IDs
  };

  return (
    <div>
      <DragDropContext onDragEnd={handleDragEnd}>
        <Droppable droppableId="droppable" direction="horizontal">
          {(provided) => (
            <div {...provided.droppableProps} ref={provided.innerRef} style={{ display: 'flex'}}>
              {cards.map((card, index) => (
                <CardsStyle key={card.id} index={index} card={card.content} />
              ))}
              {provided.placeholder}
            </div>
          )}
        </Droppable>
      </DragDropContext>
    </div>
  );
};

export default Cards;


document.addEventListener('DOMContentLoaded', function () {
  const colorPickerElements = document.querySelectorAll('.cards');
  colorPickerElements.forEach((element) => {
    const root = ReactDOM.createRoot(element);
    root.render(<Cards />);
  });
});
